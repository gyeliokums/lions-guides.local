<?php
namespace API\Models {
	class LogsDB {

		static public function instance() {
			static $_instance;
			return $_instance ? : new static();
		}

		public function catalog() {
			$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$data = \API\Data\Collector::instance();
			$sql = 'select * from `' . _makeTableName(\API\Config\Parameters::$tablePrefix, 'logsdb') . '` order by `time` desc limit 100;';
			$res = $db->query($sql);
			$data->set('data', $res, 'logsdb');
		}

	}

}