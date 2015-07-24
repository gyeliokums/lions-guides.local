<?php
namespace API\Models {
	class BannerList {
		protected
			$_db,
			$_data;

		static public function instance() {
			static $_instance = null;
			if (null === $_instance) {
				$_instance = new static();
			}
			return $_instance;
		}

		protected function __construct() {
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$this->_data = \API\Data\Collector::instance();
		}

		public function catalog() {
			// просроченные баннеры
			$sql = 'select `id`, `parent_id`, `company_name`, `alt_text`, `expiration_date`
				from `' . _makeTableName('banner') . '`
				where `expiration_date` < now();';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('[Models::Banners] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
			}
			$this->_data->set('overdue', $res, 'bannerlist');
			// баннеры до окончания действия которых < 10 дней
			$sql = 'select `id`, `parent_id`, `company_name`, `alt_text`, `expiration_date`
				from `' . _makeTableName('banner') . '`
				where `expiration_date` < (now() + interval 10 day);';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('[Models::Banners] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
			}
			$this->_data->set('near_expiration', $res, 'bannerlist');
			// баннеры до окончания действия > 10 дней и < 1 месяца
			$sql = 'select `id`, `parent_id`, `company_name`, `alt_text`, `expiration_date`
				from `' . _makeTableName('banner') . '`
				where `expiration_date` > (now() + interval 10 day)
					and `expiration_date` < (now() + interval 1 month);';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('[Models::Banners] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
			}
			$this->_data->set('long_expiration', $res, 'bannerlist');
		}

	}

}