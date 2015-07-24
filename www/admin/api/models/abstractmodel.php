<?php
namespace API\Models {
	abstract class AbstractModel {
		protected
			$_db,
			$_model,
			$_assistants,
			$_logs,
			$_serializedFields;

		static protected
			$_basicTableName = null,
			$_innerTableName = null,
			$_innerKeys = null,
			$_outerKeys = null,
			$_formFields = null;

		static public function instance() {
			static $_instance = null;
			if (null === $_instance) {
				$_instance = new static();
			}
			return $_instance;
		}

		protected function __construct() {
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$this->_model = \API\Data\Collector::instance()->get('model');
			$this->_serializedFields = array();
			static::$_innerTableName = _makeTableName(\API\Config\Parameters::$tablePrefix, static::$_basicTableName);
			$this->_logs = new \API\Assistants\LogsDB();
		}

		public function add() {
			$data = \API\Data\Collector::instance();
			$keys = $que = $values = null;
			$this->_serialize();
			foreach (static::$_innerKeys as $key) {
				if (null !== ($value = $data->get($key, $this->_model))) {
					$keys[] = '`' . $key . '`';
					$que[] = '?';
					$values[] = $value;
				}
			}
			if (0 < sizeof($keys)) {
				$keys = implode(', ', $keys);
				$que = implode(', ', $que);
				$sql = 'insert into `' . static::$_innerTableName . '` (' . $keys . ') values (' . $que . ');';
				if (null === $this->_db->query($sql, $values)) {
					throw new \Exception('SQL error in query: ' . $this->_db->showQuery($sql, $values));
				}
				$id = $this->_db->lastInsertID();
				$data->set('id', $id);
				$this->_createPathToUploads();
				$ptui = $data->get('pathToUploadImages');
				_mkDir($ptui);
				//_mkDir($ptui . '.thumbs');
				foreach ($this->_assistants as $assistant) {
					$assistant->add();
				}
				$this->_logs->add();
			}
			return $id;
		}

		public function update() {
			$data = \API\Data\Collector::instance();
			$keys = $values = null;
			$this->_serialize();
			foreach (static::$_innerKeys as $key) {
				if (null !== ($value = $data->get($key, $this->_model))) {
					$keys[] = '`' . $key . '`=?';
					$values[] = $value;
				}
			}
			if (0 < sizeof($keys)) {
				$keys = implode(', ', $keys);
				$values[] = $data->get('id');
				$sql = 'update `' . static::$_innerTableName . '` set ' . $keys . ' where `id`=? limit 1;';
				if (null === $this->_db->query($sql, $values)) {
					throw new \Exception('SQL error in query: ' . $this->_db->showQuery($sql, $values));
				}
			}
			$this->_createPathToUploads();
			foreach ($this->_assistants as $assistant) {
				$assistant->update();
			}
			$this->_logs->update();
			return true;
		}

		public function remove() {
			$data = \API\Data\Collector::instance();
			$id = $data->get('id');
			$sql = 'select `inner_name`, `name` from `' . static::$_innerTableName . '` where `id`=?;';
			$sql = 'select * from `' . static::$_innerTableName . '` where `id`=?;';
			if (null === ($res = $this->_db->query($sql, $id))) {
				throw new \Exception('SQL error in query: ' . $this->_db->showQuery($sql, $id));
			}
			$data->setStorage($res[0], $this->_model);
			$this->_logs->remove();
			$this->_createPathToUploads();
			$sql = 'delete from `' . static::$_innerTableName . '` where `id`=? limit 1;';
			foreach ($this->_assistants as $assistant) {
				$assistant->remove();
			}
			if (null === $this->_db->query($sql, $id)) {
				throw new \Exception('SQL error in query: ' . $this->_db->showQuery($sql, $id));
			}
			_rmDir($data->get('pathToUploadImages'));
			return true;
		}

		public function getKeys() {
			return array_merge(static::$_innerKeys, static::$_outerKeys);
		}

		abstract public function get($key = null);

		abstract public function catalog();

		abstract protected function _createPathToUploads();

		protected function _serialize() {
			$data = \API\Data\Collector::instance();
			$new = array();
			foreach ($this->_serializedFields as $name) {
				$$name = $data->get($name, $this->_model);
				$new = array();
				foreach ($$name as $item) {
					if (!empty($item['name']) && !empty($item['link'])) {
						$new[] = $item;
					}
				}
				$new = array_merge($new);
				$new = serialize($new);
				$data->set($name, $new, $this->_model);
			}
		}

	}

}