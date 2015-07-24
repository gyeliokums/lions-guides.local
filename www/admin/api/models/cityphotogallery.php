<?php
namespace API\Models {
	class CityPhotoGallery {

		protected
			$_db,
			$_model,
			$_target,
			$_table;

		static public function instance() {
			static $_instance = null;
			if (null === $_instance) {
				$_instance = new static();
			}
			return $_instance;
		}

		protected function __construct() {
			$data = \API\Data\Collector::instance();
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$this->_model = 'cityphotogallery';
			$this->_table = _makeTableName(\API\Config\Parameters::$tablePrefix, 'cityphotogallery');
			$this->_target = $data->get('for');
		}

		public function add() {

		}

		public function update() {

		}

		public function remove() {
			$data = \API\Data\Collector::instance();
			if (null !== ($images = $data->getStorage('cityphotogallery'))) {
				$model = $this->_target;
				if (is_numeric($model)) {
					$model = \API\Config\Models::$opened[$model];
				}
				$data->set('for', $model);
				$parentID = $data->get('parent_id');
				$que = array_fill(0, sizeof($images['imageRemove']), '?');
				$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
				$sql = 'select `parent_id`, `name` from `' . $this->_table . '` where `parent_id`=?';
				$values = array($parentID);
				$ids = '';
				if (is_array($que) && 0 < sizeof($que)) {
					$ids = ' and `id` in (' . implode(', ', $que) . ')';
					$values = array_merge($values, $images['imageRemove']);
				}
				$sql.= $ids . ';';
				if (null === ($res = $db->query($sql, $values))) {
					throw new \Exception('Ошибка выполнения запроса: ' . $db->showQuery($sql, $values));
				}
				$this->_createPathToUploads();
				$pathToUploadImages = $data->get('pathToUploadImages');
				foreach ($res as $file) {
					unlink($pathToUploadImages . $file['parent_id'] . '/cityphotogallery/' . $file['name']);
				}
				$sql = 'delete from `' . $this->_table . '` where `parent_id`=?';
				$sql.= $ids . ';';
				if (null === $db->query($sql, $values)) {
					throw new \Exception('Ошибка выполнения запроса: ' . $db->showQuery($sql, $values));
				}
			}
		}

		public function catalog() {
			$data = \API\Data\Collector::instance();
			$sql = 'select * from `' . $this->_table . '` where `parent_id`=?;';
			$parentID = $data->get('parent_id');
			if (null === ($res = $this->_db->query($sql, $parentID))) {
				throw new \Exception('Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $parentID));
			}
			$data->set('data', $res, 'photogallery');
		}

		public function get() {

		}
		protected function _createPathToUploads() {
			$data = \API\Data\Collector::instance();
			$ptui = '../uploads/images/stateunion/' . $data->get('country', 'position') . '/country/' . $data->get('city', 'position') . '/city/' . $data->get('id') . '/cityphotogallery/';
			$data->set('pathToUploadImages', $ptui);
		}

	}

}