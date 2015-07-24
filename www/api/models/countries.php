<?php
namespace API\Models {
	class Countries extends AbstractList {
		protected
			$_blogs = array('news', 'article');

		public function __construct() {
			parent::__construct();
			$this->_blogs = \API\Config\Blogs::$roster['countries'];
		}

		public function get() {
			$sql = '
				select a.`id` as `us_id`, a.`inner_name` as `su_inner_name`, a.`name` as `su_name`, b.`inner_name` as `c_inner_name`, b.`name` as `c_name`
				from `' . _makeTableName('stateunion') . '` a
				left join `' . _makeTableName('country') . '` b on a.`id`=b.`parent_id`
				order by a.`id` asc, b.`position_in_list` desc, b.`name` asc
				;';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
			}
			$result = array();
			foreach ($res as $item) {
				$result[$item['us_id']]['inner_name'] = $item['su_inner_name'];
				$result[$item['us_id']]['name'] = $item['su_name'];
				$result[$item['us_id']]['children'][] = array('inner_name' => $item['c_inner_name'], 'name' => $item['c_name']);
			}
			$this->_data->set('data', $result, 'stateunions');
		}

		protected function _makeSQLQuery() {}

		protected function _compileResult() {}

	}

}