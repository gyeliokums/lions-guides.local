<?php
namespace API\Config {
	class Models {
		static public
			$all = array(
				'stateunion' => '"Матереки"',
				'country' => 'Страны',
				'city' => 'Города',
				'lion' => 'Достопримечательности',
				'guide' => 'Путеводители',
				'article' => 'Статьи',
				'cityphotogallery' => 'Галерея',
				'kitchen' => 'Кухня',
				'news' => 'Новости',
				'souvenir' => 'Сувениры',
				'shopping' => 'Шоппинг',
				'custodian' => 'Защитник',
				'logsdb' => 'Логи',
				'banner' => 'Баннеры',
				'bannerlist' => 'Баннеры'
			),
			$opened = array(
				'stateunion',
				'country',
				'city',
				'guide',
				'lion',
				'article',
				'cityphotogallery',
				'kitchen',
				'news',
				'souvenir',
				'shopping',
				'logsdb',
				'custodian',
				'banner',
				'bannerlist'
			),
			$default = 'stateunion',

			$classMap = array(
				'stateunion' => array('country'),
				'country' => array('city', 'article', 'guide', 'kitchen', 'news', 'souvenir', 'shopping'),
				'city' => array('lion', 'cityphotogallery')
			),

			$modelDependenceCard = array(
				'stateunion' => array('country'),
				'country' => array('city', 'article'),
				'city' => array('lion')
			);

	}

}