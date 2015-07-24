<?php
namespace API\Assistants {
	class LionImagePreview {
		protected
			$_db,
			$_model,
			$_tableName,
			$_imageName;

		public function __construct() {
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$this->_model = \API\Data\Collector::instance()->get('model');
			$this->_tableName = _makeTableName(\API\Config\Parameters::$tablePrefix, 'lionimagepreview');
			$this->_imageName = 'lionimagepreview';
		}

		public function add() {
			$data = \API\Data\Collector::instance();
			$files = $data->getStorage('files');
			if (is_array($files) && 1 === sizeof($files)) {
				$uploadDir = $data->get('pathToUploadImages');
				$parentID = $data->get('id');
				$name = _copyUploadedFile($files[$this->_imageName][0], $uploadDir, true);
				$sql = 'insert into `' . $this->_tableName . '` (`parent_id`, `image_name`) values (?, ?);';
				if (null === ($res = $this->_db->query($sql, $parentID, $name['original']))) {
					throw new \Exception('Ошибка добавления preview домтопримечательности в БД. ' . $this->_db->showQuery($sql, $parentID, $name['original']));
				}
				$data->set($this->_imageName, $name['original'], $this->_model);
			}
		}

		public function update() {
			$data = \API\Data\Collector::instance();
			$uploadDir = $data->get('pathToUploadImages');
			$file = $data->get($this->_imageName, 'files');
			if ($data->get('removeImage', $this->_model) || (is_array($file) && 1 === sizeof($file))) {
				$parentID = $data->get('id');
				$sql = 'select * from `' . $this->_tableName . '` where `parent_id`=?;';
				$res = $this->_db->query($sql, $parentID);
				$res = $res[0];
				//if (!empty($res['image_name']) && file_exists($uploadDir . $res['image_name'])) {
				if (!empty($res['image_name'])) {
					@unlink($uploadDir . $res['image_name']);
					@unlink($uploadDir . '.thumbs/' . $res['image_name']);
					$sql = 'delete from `' . $this->_tableName . '` where `parent_id`=?;';
					$this->_db->query($sql, $parentID);
				}
			}
			if (is_array($file) && 1 === sizeof($file)) {
				$parentID = $data->get('id');
				$name = _copyUploadedFile($file[0], $uploadDir, true);
				$sql = 'insert into `' . $this->_tableName . '` (`parent_id`, `image_name`) values (?, ?);';
				if (null === ($res = $this->_db->query($sql, $parentID, $name['original']))) {
					throw new \Exception('Ошибка добавления preview домтопримечательности в БД. ' . $this->_db->showQuery($sql, $parentID, $name['original']));
				}
				$data->set($this->_imageName, $name['original'], $this->_model);
			}
		}

		public function remove() {
			$data = \API\Data\Collector::instance();
			$uploadDir = $data->get('pathToUploadImages');
			$parentID = $data->get('id');
			$sql = 'select * from `' . $this->_tableName . '` where `id`=?;';
			$res = $this->_db->query($sql, $parentID);
			$res = $res[0];
			if (!empty($res['image_name']) && file_exists($uploadDir . $res['image_name'])) {
				@unlink($uploadDir . $res['image']);
				@unlink($uploadDir . '.thumbs/' . $res['image_name']);
				$sql = 'delete from `' . $this->_tableName . '` where `parent_id`=?;';
				$this->_db->query($sql, $parentID);
			}
		}

		public function get() {
			$data = \API\Data\Collector::instance();
			$parentID = $data->get('id');
			$sql = 'select `image_name` from `' . $this->_tableName . '` where `parent_id`=?;';
			$res = $this->_db->query($sql, $parentID);
			$data->set('data', array($this->_imageName => $res[0]['image_name']), $this->_model);
		}

	}

}