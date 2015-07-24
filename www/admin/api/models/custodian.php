<?php
namespace API\Models {
	class Custodian
	{
		static public
			$_backupDirectory = 'backups/';

		protected
			$_tables,
			$_tree,
			$_db = null,
			$_dbName;

		static public function instance() {
			static $_instance = null;
			return $_instance ? : new static();
		}

		protected function __construct()
		{
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$tmp = '\\API\\Config\\' . \API\Config\Parameters::$sql;
			$this->_dbName = $tmp::$db;
			$this->_tree = null;
			$this->_tables = null;
		}

		public function backup()
		{
			$this->_getTables();
			$this->_buildTree();
			if (null !== $this->_tree) {
				$this->_buildOrderedTree($this->_tree);
			}
			$this->_createBackUpFile();
			\API\Data\Error::instance()->set('Данные успешно сохранены.', 'notice');
		}

		public function restore()
		{
			$met = ini_get('max_execution_time');
			ini_set('max_execution_time', 120);
			$data = \API\Data\Collector::instance();
			$fileName = $data->get('fileList', 'custodian');
			if (!file_exists($fileName)) {
				throw new \Exception('Не найден файл исходник.');
			}
			$restoreSQL = file_get_contents($fileName);
			//_dvd($restoreSQL);
			if (null === ($this->_db->query($restoreSQL))) {
				throw new \Exception('Не удалось восстановить состояние системы.');
			}
			\API\Data\Error::instance()->set('Данные восстановлены.', 'notice');
			ini_set('max_execution_time', $met);
		}

		public function get()
		{
			$data = \API\Data\Collector::instance();
			$tablePrefix = \API\Config\Parameters::$tablePrefix;
			$backups = glob(static::$_backupDirectory . '*-' . $tablePrefix . '.sql');
			$data->set('fileList', array_reverse($backups), 'custodian');
			$data->set('fileName', date('Y-m-d-H-i') . '-' . \API\Config\Parameters::$tablePrefix . '.sql', 'custodian');
		}

		public function catalog()
		{
			return $this->get();
		}

		protected function _getTables()
		{
			$sql = 'SELECT `table_name` FROM `information_schema`.`tables` WHERE `table_schema`="' . $this->_dbName . '";';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('Ошибка получения списка таблиц! Возможно нет доступа к таблицам `information_schema`.');
			}
			foreach ($res as $value) {
				$this->_tables[$value['table_name']] = $value['table_name'];
			}
		}

		protected function _buildTree() {
			$sql = 'SELECT `FOR_NAME` AS `driven`, `REF_NAME` AS `leading` FROM `information_schema`.`innodb_sys_foreign` WHERE `FOR_NAME` LIKE(concat("' . $this->_dbName . '", "%"));';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('Ошибка получения списка таблиц! Возможно нет доступа к таблицам `information_schema`.');
			}
			$this->_tree = array();
			$drivens = array();
			foreach ($res as $value) {
				$leading = str_replace($this->_dbName . '/', '', $value['leading']);
				$driven = str_replace($this->_dbName . '/', '', $value['driven']);
				$this->_tree[$leading][$driven] = null;
				$drivens[] = $driven;
			}
			foreach ($this->_tree as $keys => $values) {
				foreach ($values as $key => $value) {
					if (array_key_exists($key, $this->_tree)) {
						$this->_tree[$keys][$key] = &$this->_tree[$key];
					}
				}
			}
			foreach ($drivens as $driven) {
				if (array_key_exists($driven, $this->_tree)) {
					unset($this->_tree[$driven]);
				}
			}

		}

		protected function _buildOrderedTree($node) {
			foreach ($node as $key => $value) {
				unset($this->_tables[$key]);
				$this->_tables[] = $key;
				if (is_array($value)) {
					$this->_buildOrderedTree($value);
				}
			}
		}

		protected function _createBackUpFile() {
			$data = \API\Data\Collector::instance();
			$fileName = $data->get('fileName', 'custodian');
			$backup = array();
			foreach (array_reverse($this->_tables) as $table) {
				$backup[] = 'drop table if exists `' . $table . '`;' . PHP_EOL;
			}
			$backup[] = PHP_EOL . PHP_EOL;
			foreach ($this->_tables as $table) {
				$sql = 'show create table `' . $table . '`;';
				$ct = $this->_db->query($sql);
				$backup[] = '--' . PHP_EOL . '-- structure for ' . $table . PHP_EOL . '--' . PHP_EOL . PHP_EOL;
				$backup[] = str_replace('TABLE', 'TABLE IF NOT EXISTS', $ct[0]['Create Table']) . ';' . PHP_EOL . PHP_EOL;
				$backup[] = '--' . PHP_EOL . '-- data for ' . $table . PHP_EOL . PHP_EOL;
				$sql = 'select * from `' . $table . '`;';
				$res = $this->_db->query($sql);
				if (0 === strcasecmp($table, _makeTableName(\API\Config\Parameters::$tablePrefix, 'logsdb'))) {
					continue;
				}
				foreach ($res as $value) {
					//$sql = 'insert into `' . $table . '` values (' . implode(', ', array_fill(0, sizeof($value), '?')) . ');';
					//$backup[] = $this->_db->showQuery($sql, array_values($value)) . PHP_EOL;
					$insertSQL = $this->_makeInsertQuery($table, $value);
					$backup[] = $this->_db->showQuery($insertSQL['query'], $insertSQL['data']) . PHP_EOL;
				}
				$backup[] = PHP_EOL. PHP_EOL . PHP_EOL;
			}
			$backup = implode('', $backup);
			$fileName = $fileName ? static::$_backupDirectory . $fileName : static::$_backupDirectory . date('Y-m-d-H-i') . '-' . \API\Config\Parameters::$tablePrefix . '.sql';
			file_put_contents($fileName, $backup);
		}

		protected function _makeInsertQuery($table, array $data){
			foreach ($data as $key => $value) {
				$fields[] = '`' . $key . '`';
				$sep[] = '?';
				$values[] = $value;
			}
			$sql = 'insert into `' . $table . '` (' . implode(', ', $fields) . ') values (' . implode(', ', $sep) . ');';
			return array('query' => $sql, 'data' => $values);
		}

	}

}