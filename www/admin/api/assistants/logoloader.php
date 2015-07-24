<?php
namespace API\Assistants {
	class LogoLoader {
		protected
			$_db,
			$_model,
			$_tableName;

		public function __construct() {
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$this->_model = \API\Data\Collector::instance()->get('model');
			$this->_tableName = _makeTableName(\API\Config\Parameters::$tablePrefix, 'logotypes');
		}

		public function add() {
			$data = \API\Data\Collector::instance();
			$files = $data->getStorage('files');
			if (is_array($files) && 1 === sizeof($files)) {
				$uploadDir = $data->get('pathToUploadImages');
				$id = $data->get('id');
				$name = _copyUploadedFile($files['image'][0], $uploadDir, true);
				$sql = 'insert into `' . $this->_tableName . '` (`model`, `id`, `image`) values (?, ?, ?);';
				if (null === ($res = $this->_db->query($sql, $this->_model, $id, $name['original']))) {
					throw new \Exception('Ошибка добавления логотипа в БД. ' . $this->_db->showQuery($sql, $this->_model, $id, $name['original']));
				}
				$data->set('image', $name, $this->_model);
			}
			return $name;
		}

		public function update() {
			$data = \API\Data\Collector::instance();
			$uploadDir = $data->get('pathToUploadImages');
			$file = $data->get('image', 'files');
			if ($data->get('removeImage', $this->_model) || (is_array($file) && 1 === sizeof($file))) {
				$id = $data->get('id');
				$sql = 'select * from `' . $this->_tableName . '` where `model`=? and `id`=?;';
				$res = $this->_db->query($sql, $this->_model, $id);
				$res = $res[0];
				//if (!empty($res['image']) && file_exists($uploadDir . $res['image'])) {
				if (!empty($res['image'])) {
					@unlink($uploadDir . $res['image']);
					@unlink($uploadDir . '.thumbs/' . $res['image']);
				}
				$sql = 'delete from `' . $this->_tableName . '` where `model`=? and `id`=?;';
				$this->_db->query($sql, $this->_model, $id);
			}
			if (is_array($file) && 1 === sizeof($file)) {
				$id = $data->get('id');
				$name = _copyUploadedFile($file[0], $uploadDir, true);
				$sql = 'insert into `' . $this->_tableName . '` (`model`, `id`, `image`) values (?, ?, ?);';
				if (null === ($res = $this->_db->query($sql, $this->_model, $id, $name['original']))) {
					throw new \Exception('Ошибка добавления логотипа в БД. ' . $this->_db->showQuery($sql, $this->_model, $id, $name['original']));
				}
				$data->set('image', $name, $this->_model);
			}
		}

		public function remove() {
			$data = \API\Data\Collector::instance();
			$uploadDir = $data->get('pathToUploadImages');
			$id = $data->get('id');
			$sql = 'select * from `` where `model`=? and `id`=?;';
			$res = $this->_db->query($sql, $this->_model, $id);
			$res = $res[0];
			//if (!empty($res['image']) && file_exists($uploadDir . $res['image'])) {
			if (!empty($res['image'])) {
				@unlink($uploadDir . $res['image']);
				@unlink($uploadDir . '.thumbs/' . $res['image']);
			}
			$sql = 'delete from `' . $this->_tableName . '` where `model`=? and `id`=?;';
			$this->_db->query($sql, $this->_model, $id);
		}

		public function get() {
			$data = \API\Data\Collector::instance();
			$id = $data->get('id');
			$sql = 'select `image` from `' . $this->_tableName . '` where `model`=? and `id`=?;';
			$res = $this->_db->query($sql, $this->_model, $id);
			$data->set('data', array('image' => $res[0]['image']), $this->_model);
		}

	}

}