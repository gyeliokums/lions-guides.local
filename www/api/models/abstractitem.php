<?php
namespace API\Models {
	class AbstractItem {
		protected
			$_db,
			$_data,
			$_smarty,
			$_assistants,
			$_blogs,
			$_clause;

		public function __construct() {
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$this->_data = \API\Data\Collector::instance();
			$model = $this->_data->get('model');
			$this->_smarty = \SingleSmarty::instance();
			$this->_assistants[] = 'CountryPosition';
			$this->_assistants[] = 'Banners';
			$this->_blogs = \API\Config\Blogs::$roster[$model];
		}

		public function get() {
			$model = $this->_data->get('model');
			$id = $this->_data->get('id');
			$this->_runAssistants();
			$this->_breadcrumbs();
			$this->_currentPosition();
			$sql = 'select * from `' . _makeTableName($model) . '` where `id`=?;';
			if(null === ($res = $this->_db->query($sql, $id))) {
				throw new \Exception('[Models::' . $model . '] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $id));
			}
			$res = $res[0];
			$this->_smarty->assign('_inner_name', $res['inner_name']);
			$this->_smarty->assign('_page_title', $res['title']);
			$this->_smarty->assign('_page_keywords', $res['keywords']);
			$this->_smarty->assign('_page_description', $res['meta_description']);
			$res['description'] = str_replace(array('{shortdescription}', '{/shortdescription}'), array('', ''), $res['description']);
			$this->_data->set('data', $res, 'entity');
			$this->_compileBlogs();
			$this->_data->set('model', $model);
		}

		protected function _runAssistants() {
			foreach ($this->_assistants as $assistant) {
				$assistant = '\\API\\Assistants\\' . $assistant;
				$assistant::get();
			}
		}

		protected function _compileBlogs() {
			foreach ($this->_blogs as $name => $count) {
				$this->_data->set('model', $name);
				\API\Assistants\ModelRoster::get($count);
			}
		}

		protected function _breadcrumbs() {
			$model = mb_strtolower($this->_data->get('model'));
			$sql = null;
			$id = $this->_data->get('id');
			switch ($model) {
				case 'lion':
					$sql = '
						select a.`id` as `state_id`, a.`inner_name` as `state_inner_name`, a.`name` as `state_name`,
							b.`id` as `country_id`, b.`inner_name` as `country_inner_name`, b.`name` as `country_name`,
							c.`id` as `entity_id`, c.`inner_name` as `entity_inner_name`, c.`name` as `entity_name`,
							d.`id` as `lion_id`, d.`inner_name` as `lion_inner_name`, d.`name` as `lion_name`
						from `' . _makeTableName('lion') . '` d
						inner join `' . _makeTableName('city') . '` c on d.`parent_id`=c.`id`
						inner join `' . _makeTableName('country') . '` b on c.`parent_id`=b.`id`
						inner join `' . _makeTableName('stateunion') . '` a on b.`parent_id`=a.`id`
						where d.`id`=?;';
					break;
				case 'city': case 'article': case 'news': case 'kitchen': case 'guide': case 'souvenir': case 'shopping':
					$sql = '
						select c.`id` as `entity_id`, c.`inner_name` as `entity_inner_name`, c.`name` as `entity_name`,
							b.`id` as `country_id`, b.`inner_name` as `country_inner_name`, b.`name` as `country_name`,
							a.`id` as `state_id`, a.`inner_name` as `state_inner_name`, a.`name` as `state_name`
						from `' . _makeTableName($model) . '` c
						inner join `' . _makeTableName('country') . '` b on c.`parent_id`=b.`id`
						inner join `' . _makeTableName('stateunion') . '` a on b.`parent_id`=a.`id`
						where c.`id`=?;';
					break;
				case 'country':
					$sql = '
						select b.`id` as `country_id`, b.`inner_name` as `country_inner_name`, b.`name` as `country_name`,
							a. `id` as `state_id`, a.`inner_name` as `state_inner_name`, a.`name` as `state_name`
						from `' . _makeTableName('country') . '` b
						inner join `' . _makeTableName('stateunion') . '` a on b.`parent_id`=a.`id`
						where b.`id`=?;';
					break;
			}
			if (null !== $sql) {
				if (null === ($res = $this->_db->query($sql, $id))) {
					throw new \Exception('[Assistants::BreadCrumbs] Ошибка выполнения запроса: ' . $db->showQuery($sql, $id));
				}
			}
			$res = $res[0];
			$this->_data->set('data', $res, 'breadcrumbs');
		}

		protected function _currentPosition() {

		}

	}

}