<?php
namespace API\Models {
	class StateUnion extends \API\Models\AbstractModel {
		static protected
			$_basicTableName = 'stateunion',
			$_innerKeys = array(
				'inner_name',
				'name',
				'countries'
			);

		protected function __construct() {
			parent::__construct();
			$this->_assistants[] = new \API\Assistants\ModelsLinks();
			$this->_serializedFields = array('countries');
		}

		public function catalog() {
			$data = \API\Data\Collector::instance();
			$sql = 'select `id`, `inner_name`, `name` from `' . static::$_innerTableName . '`;';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
			}
			$data->set('data', $res, $this->_model);
			return $res;
		}

		public function get($key = null) {
			$data = \API\Data\Collector::instance();
			$id = $data->get('id');
			if (is_numeric($id) && 0 < $id) {
				$sql = 'select * from `' . static::$_innerTableName . '` where `id`=?;';
				if (null === ($res = $this->_db->query($sql, $id))) {
					throw new \Exception('Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
				}
			}
			$res = $res[0];
			foreach ($this->_serializedFields as $name) {
				$res[$name] = unserialize($res[$name]);
			}
			$data->set('data', $res, $this->_model);
			return $res;
		}

		protected function _createPathToUploads() {
			$data = \API\Data\Collector::instance();
			$ptui = '../uploads/images/stateunion/' . $data->get('id') .'/';
			$data->set('pathToUploadImages', $ptui);
		}

	}

}