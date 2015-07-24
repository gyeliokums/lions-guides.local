<?php
namespace API\Models {
	class City extends AbstractModel {
		static protected
			$_basicTableName = 'city',
			$_innerKeys = array(
				'parent_id',
				'inner_name',
				'title',
				'keywords',
				'meta_description',
				'name',
				'image',
				'short_description',
				'description',
				'search_words'
			);

		protected function __construct() {
			parent::__construct();
			$this->_assistants[] = new \API\Assistants\ModelsLinks();
			$this->_assistants[] = new \API\Assistants\LogoLoader();
		}

		public function add() {
			$data = \API\Data\Collector::instance();
			parent::add();
			$pathToUploadImages = $data->get('pathToUploadImages');
			_mkDir($pathToUploadImages . '/cityphotogallery/');
		}


		public function catalog() {
			$parent_id = \API\Data\Collector::instance()->get('parent_id');
			if (is_numeric($parent_id) && 0 < $parent_id) {
				$sql = 'select `id`, `parent_id`, `inner_name`, `name` from `' . static::$_innerTableName . '` where `parent_id`=?;';
				if (null === ($res = $this->_db->query($sql, $parent_id))) {
					throw new \Exception('Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $parent_id));
				}
			}
			\API\Data\Collector::instance()->set('data', $res, $this->_model);
			return $res;
		}

		public function get($key = null) {
			$data = \API\Data\Collector::instance();
			$id = $data->get('id');
			if (is_numeric($id) && 0 < $id) {
				$sql = 'select * from `' . static::$_innerTableName . '` where `id`=?;';
				if (null === ($res = $this->_db->query($sql, $id))) {
					throw new \Exception('Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
				}
			}
			$res = $res[0];
			foreach ($this->_serializedFields as $name) {
				$res[$name] = unserialize($res[$name]);
			}
			$data->set('data', $res, $this->_model);
			foreach ($this->_assistants as $assistant) {
				$assistant->get();
			}
			return $res;
		}

		protected function _createPathToUploads() {
			$data = \API\Data\Collector::instance();
			$ptui = '../uploads/images/stateunion/' . $data->get('country', 'position') . '/country/' . $data->get('city', 'position') . '/city/' . $data->get('id') . '/';
			$data->set('pathToUploadImages', $ptui);
		}

	}

}