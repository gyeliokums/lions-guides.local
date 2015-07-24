<?php
namespace API\Assistants {
	class LogsDB {
		protected
			$_db,
			$_model,
			$_action,
			$_tableName;

		public function __construct() {
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$this->_model = \API\Data\Collector::instance()->get('model');
			$this->_tableName = _makeTableName(\API\Config\Parameters::$tablePrefix, 'logsdb');
		}

		public function add() {
			$this->_action = 'добавил';
			$this->_doIt();
		}

		public function update() {
			$this->_action = 'изменил';
			$this->_doIt();
		}

		public function remove() {
			$this->_action = 'удалил';
			$this->_doIt();
		}

		protected function _doIt() {
			$data = \API\Data\Collector::instance();
			$inner_name = $data->get('inner_name', $this->_model);
			$name = $data->get('name', $this->_model);
			$user = $data->get('full_name', 'authorization');
			$action = $this->_action . ' запись [' . $inner_name . '] "' . $name . '" в таблице "' . \API\Config\Models::$all[$this->_model] . '"';
			if (null !== $inner_name && null !== $user) {
				$sql = 'insert into `' . $this->_tableName . '` (`time`, `user`, `action`) values (NOW(), ?, ?);';
				if (null === $this->_db->query($sql, $user, $action)) {
					throw new \Exception('Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $user, $action));
				}
			}
//			$this->_clearOldStory();
		}

		protected function _clearOldStory() {
			$sql = 'select * from `' . _makeTableName(\API\Config\Parameters::$tablePrefix, 'logsdb') . '` order by `time` desc limit 100;';
			$res = $this->_db->query($sql);
			if (is_array($res)) {
				$last = array_pop($res);
				$date = $last['time'];
				$sql = 'delete from `' . _makeTableName(\API\Config\Parameters::$tablePrefix, 'logsdb') . '` where `time`<?;';
				if (null === $this->_db->query($sql, $date)) {
					throw new \Exception('Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $date));
				}
			}
		}

	}

}