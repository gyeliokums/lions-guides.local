<?php
namespace API\Assistants {
	class BannerLink {

		static public function get() {
			$data = \API\Data\Collector::instance();
			$banners = $data->get('data', 'banners');
			$sessionKey = sha1(session_id());
			foreach ($banners as & $banner) {
				$tmp = array('a' => $banner['id'], 'b' => $sessionKey);
				$tmp = base64_encode(serialize($tmp));
				$banner['href'] = $tmp;
			}
			$data->remove('data', 'banners');
			$data->set('data', $banners, 'banners');
		}
	}

}