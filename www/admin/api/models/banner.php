<?php
namespace API\Models {
	class Banner extends \API\Models\AbstractModel {
		static protected
			$_basicTableName = 'banner',
			$_innerKeys = array(
				'parent_id',
				'company_name',
				'contact_fio',
				'contact_phone',
				'contact_email',
				'expiration_date',
				'alt_text',
				'image',
				'href',
				'show_count',
				'click_count'
			);

		protected function __construct() {
			parent::__construct();
			$this->_assistants[] = new \API\Assistants\ModelsLinks();
			$this->_assistants[] = new \API\Assistants\LogoLoader();
		}

		public function catalog() {
			$data = \API\Data\Collector::instance();
			$parent_id = $data->get('parent_id');
			if (is_numeric($parent_id) && 0 < $parent_id) {
				$sql = 'select `id`, `parent_id`, `company_name`, `alt_text`, `expiration_date`, `show_count`, `click_count` from `' . static::$_innerTableName . '`	where `parent_id`=?;';
				if (null === ($res = $this->_db->query($sql, $parent_id))) {
					throw new \Exception('Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $parent_id));
				}
			} else {
				throw new \Exception(__CLASS__ . ': Не указан идентификатор родительского элемента!');
			}
			$data->set('data', $res, $this->_model);
			return $res;
		}

		public function get($key = null)
		{
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
			$ptui = '../uploads/images/stateunion/' . $data->get('country', 'position') . '/country/' . $data->get('city', 'position') . '/banners/';
			$data->set('pathToUploadImages', $ptui);
		}
	}

}