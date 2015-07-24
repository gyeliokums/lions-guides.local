<?php
namespace API\Models {
	abstract class AbstractList {
		protected
			$_db,
			$_data,
			$_smarty,
			$_assistants,
			$_blogs;

		public function __construct() {
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$this->_data = \API\Data\Collector::instance();
			$model = $this->_data->get('model');
			$this->_smarty = \SingleSmarty::instance();
			$this->_assistants = array();
			$this->_assistants[] = 'Banners';
			$this->_blogs = \API\Config\Blogs::$roster[$model];
		}

		public function get() {
			$model = $this->_data->get('model');
			$parent_id = $this->_data->get('id');
			list($link, $table) = $this->_data->get('queryArray');
			$this->_data->set('model', $table);
			$this->_runAssistants();
			$this->_breadcrumbs();
			$this->_currentPosition();
			$sql = $this->_makeSQLQuery();
			if (null === ($res = $this->_db->query($sql, $parent_id))) {
				throw new \Exception('[Models::AbstractList] Ошибка выполнения запроса:' . $this->_db->showQuery($sql, $parent_id));
			}
			foreach ($res as & $item) {
				$item = $this->_compileResult($item);
			}
			$this->_data->set('data', $res, 'entity');
			$this->_compileBlogs();
			$this->_data->set('model', $model);
		}

		abstract protected function _makeSQLQuery();

		protected function _compileResult() {
			if (1 > func_num_args()) {
				return;
			}
			$item = & func_get_arg(0);
			if (preg_match_all('/\{shortdescription\}(.*)\{\/shortdescription\}/Usi', $item['description'], $matches)) {
				$item['short_description'] = implode('<br />', $matches[1]);
			}
			unset($item['description']);
			if (isset($item['create_time'])) {
				$item['create_time'] = substr($item['create_time'], 0 , 10);
			}
			if (!empty($item['image'])) {
				$pos = $this->_data->get('data', 'breadcrumbs');
				$item['image'] = '/uploads/images/stateunion/' . $pos['state_id'] .
						'/country/' . $pos['country_id'] .
						'/' . $this->_data->get('model') . '/' . $item['id'] . '/' . $item['image'];
			}
			return $item;
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
						select c.`id`, as `entity_id`, c.`inner_name` as `entity_inner_name`, c.`name` as `entity_name`,
							b.`id` as `country_id`, b.`inner_name` as `country_inner_name`, b.`name` as `country_name`,
							a.`id` as `state_id`, a.`inner_name` as `state_inner_name`, a.`name` as `state_name`
						from `' . _makeTableName($model) .'` c
						inner join `' . _makeTableName('country') . '` b on c.`parent_id`=b.`id`
						inner join `' . _makeTableName('stateunion') . '` a on b.`parent_id`=a.`id`
						where c.`id`=?;';
					break;
				case 'city':
				case 'article':
				case 'news':
				case 'kitchen':
				case 'guide':
				case 'souvenir':
				case 'shopping':
					$sql = 'select
							b.`id` as `country_id`, b.`inner_name` as `country_inner_name`, b.`name` as `country_name`,
							a.`id` as `state_id`, a.`inner_name` as `state_inner_name`, a.`name` as `state_name`
						from `' . _makeTableName('country') . '` b
						inner join `' . _makeTableName('stateunion') . '` a on b.`parent_id`=a.`id`
						where b.`id`=?;';
					break;
				case 'country':
					$sql = '
						select a.`id` as `state_id`, a.`inner_name` as `state_inner_name`, a.`name` as `state_name`
						from `' . _makeTableName('stateunion') . '` a
						where a.`id`=?;';
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