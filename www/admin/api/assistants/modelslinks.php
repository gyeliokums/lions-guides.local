<?php
namespace API\Assistants {
	class ModelsLinks {
		protected
//			$work,
			$_db,
			$_model,
			$_tableName;

		public function __construct() {
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$this->_model = \API\Data\Collector::instance()->get('model');
			$this->_tableName = _makeTableName(\API\Config\Parameters::$tablePrefix, 'modelslinks');
		}

		public function add() {
			$data = \API\Data\Collector::instance();
			$id = $data->get('id');
			$inner_name = $data->get('inner_name', $this->_model);
			if (null !== $inner_name) {
				$sql = 'insert into `' . $this->_tableName . '` (`inner_name`, `link_id`, `model`) values (?, ?, ?);';
				if (null === $this->_db->query($sql, $inner_name, $id, $this->_model)) {
					throw new \Exception('Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $inner_name, $id, $this->_model));
				}
			}
		}

		public function update() {
			$data = \API\Data\Collector::instance();
//_dvd($data->getStorage($this->_model));
			$id = $data->get('id');
			$inner_name = $data->get('inner_name', $this->_model);
			$sql = 'delete from `' . $this->_tableName . '` where `model`=? and `link_id`=?;';
			$res = $this->_db->query($sql, $this->_model, $id);
			$sql = 'insert into `' . $this->_tableName . '` (`inner_name`, `model`, `link_id`) values (? ,?, ?);';
//_dvd($this->_db->showQuery($sql, $inner_name, $this->_model, $id));
			if (null !== $inner_name) {
				if (null === $this->_db->query($sql, $inner_name, $this->_model, $id)) {
					throw new \Exception('Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $inner_name, $this->_model, $id));
				}
			}
		}

		public function remove() {
			$data = \API\Data\Collector::instance();
			$id = $data->get('id');
			$removeList = $this->_removeChild($this->_model, array($id));
			foreach ($removeList as $model => $ids) {
				$sql = 'delete from `' . $this->_tableName . '` where `model`="' . $model .'" and `link_id` in (' . implode(', ', $ids) . ');';
				$this->_db->query($sql);
			}
			$sql = 'delete from `' . $this->_tableName . '` where `model`=? and `link_id`=?;';
			if (null === $this->_db->query($sql, $this->_model, $id)) {
				throw new \Exception('Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $this->_model, $id));
			}
		}

		public function catalog() {}

		public function get() {}

		protected function _removeChild($model = null, array $ids = null) {
			if (null === $model || null === $ids) {
				return;
			}
			$toRemove = array();
			$dependences = \API\Config\Models::$modelDependenceCard;
			if (array_key_exists($model, $dependences)) {
				foreach ($dependences[$model] as $dep) {
					$sql = 'select `id` from `' . _makeTableName(\API\Config\Parameters::$tablePrefix, $dep) . '`  where `parent_id` in (' . implode(', ', $ids) . ');';
					$res = $this->_db->query($sql);
					if (0 < sizeof($res)) {
						$ids = array();
						foreach ($res as $r) {
							$ids[] = $r['id'];
						}
						$toRemove[$dep] = $ids;
						if (array_key_exists($dep, $dependences)) {
							$toRemove = array_merge($toRemove, $this->_removeChild($dep, $ids));
						}
					}
				}
			}
			return $toRemove;
		}

	}

}