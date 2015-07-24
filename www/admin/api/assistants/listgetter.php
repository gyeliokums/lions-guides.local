<?php
namespace API\Assistants {
	class ListGetter {
		protected
			$_keyName,
			$_tableName,
			$_db;

		public function __construct($name = null) {
			$this->_tableName = null;
			if (null === $name) {
				return;
			}
			$this->_keyName = $name;
			$this->_tableName = _makeTableName(\API\Config\Parameters::$tablePrefix, $name);
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
		}

		public function add() {}

		public function update() {}

		public function remove() {}

		public function catalog() {
			$this->_get();
		}

		public function get() {
			$this->_get();
		}

		protected function _get() {
			if (null === $this->_tableName) {
				return;
			}
			$data = \API\Data\Collector::instance();
			$sql = 'select `id`, `name` from `' . $this->_tableName . '`;';
			$res = $this->_db->query($sql);
			$data->set($this->_keyName . 's', $res, $data->get('model'));
		}

	}

}