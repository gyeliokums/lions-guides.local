<?php
namespace API\Controllers {
	class LogsDB {

		public function run() {
			$db = \API\Lib\DB::init();
			$data = \API\Data\Collector::instance();
			$safe = $data->get('safe');
			$sql =
			$sql = '
				drop table if exists `' . _makeTableName('logsdb_clean') . '`;
				create table `' . _makeTableName('logsdb_clean') . '` (
					`time` timestamp,
					`user` varchar(128) not null,
					`action` varchar(512) not null
				) engine=innodb charset=utf8;
				insert into `' . _makeTableName('logsdb_clean') . '`
					select * from `' . _makeTableName('logsdb') . '` order by `time` desc limit ' . $safe . ';
				drop table `' . _makeTableName('logsdb') . '`;
				alter table `' . _makeTableName('logsdb_clean') . '` rename `' . _makeTableName('logsdb') . '`;';
			if (null === $db->exec($sql)) {
				throw new \Exception('[Controllers::LogsDB] Ошибка: ' . $db->showQuery($sql));
			}
			header('Location: /admin/?model=logsdb');
		}
	}

}