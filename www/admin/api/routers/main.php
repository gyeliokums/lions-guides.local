<?php
namespace API\Routers {
	class Main {
		static protected
			$_tree = array('stateunion', 'country', 'city', 'lion', 'article', 'cityphotogallery', 'news', 'kitchen', 'guide', 'souvenir', 'shopping'),
			$_tree2 = array(
				'stateunion' => null,
				'country' => array('stateunion'),
				'article' => array('stateunion'),
				'city' => array('stateunion', 'country'),
				'cityphotogallery' => array('stateunion', 'country'),
				'lion' =>array('stateunion', 'country', 'city')
			);

		static public function init() {
			$data = \API\Data\Collector::instance();
			if (null !== ($sql = $data->get('SQL'))) {
				\API\Config\Parameters::$sql = $sql;
				$_SESSION['auth']['SQL'] = $sql;
			}
			if (!empty($_SESSION['auth']['SQL'])) {
				\API\Config\Parameters::$sql = $_SESSION['auth']['SQL'];
			}
//			if (in_array($data->get('model'), static::$_tree) && null === $data->get('action')) {
			if (in_array($data->get('model'), \API\Config\Models::$opened) && null === $data->get('action')) {
				if (null !== $data->get('back')) {
					$data->set('parent_id', $data->get($data->get('model'), 'position'));
				} else {
					$data->set($data->get('model'), $data->get('parent_id'), 'position');
				}
			}
		}

	}

}