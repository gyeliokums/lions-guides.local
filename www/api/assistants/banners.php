<?php
namespace API\Assistants {
	class Banners {

		static public function get() {
			$data = \API\Data\Collector::instance();
			$db = \API\Lib\DB::init();
			$country = $data->get('country', 'position');
			$country = $country['id'];
			if (null === $country) {
				return;
			}
			$sql = '
				select `id`, `href`, `alt_text` as `alt`, `image` as `src`
				from `' . _makeTableName('banner') . '`
				where `parent_id`=? and `expiration_date` > now()
				order by rand()
				limit 2;';
			if (null === ($res = $db->query($sql, $country))) {
				throw new \Exception('[Assistants::Baners] Ошибка выполнения запроса: ' . $db->showQuery($sql, $country));
			}
			$data->set('data', $res, 'banners');
			\API\Assistants\BannerLink::get();
		}

	}

}