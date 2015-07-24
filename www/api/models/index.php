<?php
namespace API\Models {
	class Index {
		protected
			$_db,
			$_data;

		static public
			$limits = array(
				'guides' => 8,
				'lions' => 8,
				'news' => 4,
				'articles' => 4,
				'countries' => 5,
				'shopping' => 3,
				'souvenir' => 3,
				'banners' => 3
			);

		public function __construct() {
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$this->_data = \API\Data\Collector::instance();
		}

		public function get() {
			$this->_guidesRoster();
			$this->_lionsRoster();
			$this->_newsRoster();
			$this->_articlesRoster();
			$this->_countriesRoster();
			$this->_shoppingRoster();
			$this->_bannersRoster();
			\API\Assistants\BannerLink::get();
		}

		protected function _guidesRoster() {
			$sql = '
				select a.`id`, a.`inner_name`, a.`name`,a.`short_description`,
					b.`image`, a.`description`, c.`id` as `cid`, d.`id` as `sid`
				from `' . _makeTableName('guide') . '` a
				left join `' . _makeTableName('logotypes') . '` b on (`model`="guide" and b.`id`=a.`id`)
				inner join `' . _makeTableName('country') . '` c on c.`id`=a.`parent_id`
				inner join `' . _makeTableName('stateunion') . '` d on d.`id`=c.`parent_id`
				order by a.`id` desc
				limit ' . static::$limits['guides'] . ';';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('[Models::Index] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
			}
			foreach ($res as & $item) {
				if (preg_match_all('/\{shortdescription\}(.*)\{\/shortdescription\}/Usi', $item['description'], $matches)) {
					$item['short_description'] = implode('<br />', $matches[1]);
				}
				$item['image'] = '/uploads/images/stateunion/' . $item['sid'] . '/country/' . $item['cid'] .
						'/guide/' . $item['id'] . '/' . $item['image'];
				unset($item['description']); unset($item['cid']); unset($item['sid']);
			}
			$this->_data->set('data', $res, 'guide_blog');
		}

		protected function _lionsRoster() {
			$sql = '
				select a.`id`, a.`inner_name`, a.`name`, b.`image_name` as `image`, c.`id` as `city_id`,
				d.`id` as `country_id`, d.`name` as `country_name`, e.`id` as `state_id`
				from `' . _makeTableName('lion') . '` a
				left join `' . _makeTableName('lionimagepreview') . '` b on b.`parent_id`=a.`id`
				inner join `' . _makeTableName('city') . '` c on a.`parent_id`=c.`id`
				inner join `' . _makeTableName('country') . '` d on c.`parent_id`=d.`id`
				inner join `' . _makeTableName('stateunion') . '` e on d.`parent_id`=e.`id`
				order by a.`id` desc
				limit ' . static::$limits['lions'] . ';';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('[Models::Index] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
			}
			foreach ($res as & $item) {
				if (preg_match_all('/\{shortdescription\}(.*)\{\/shortdescription\}/Usi', $item['description'], $matches)) {
					$item['short_description'] = implode('<br />', $matches[1]);
				}
				$item['image'] = '/uploads/images/stateunion/' . $item['state_id'] . '/country/' . $item['country_id'] .
						'/city/' . $item['city_id'] . '/lion/' . $item['id'] . '/' . $item['image'];
				unset($item['description']); unset($item['city_id']); unset($item['country_id']); unset($item['state_id']);
			}
			$this->_data->set('data', $res, 'lion_blog');
		}

		protected function _newsRoster() {
			$sql ='
				select a.`id`, a.`inner_name`, a.`name`, a.`create_time` as `date`, a.`short_description`, a.`description`,
					b.`image`, c.`id` as `country_id`, d.`id` as `state_id`
				from `' . _makeTableName('news') . '` a
				left join `' ._makeTableName('logotypes') . '` b on (`model`="news" and b.`id`=a.`id`)
				inner join `' . _makeTableName('country') . '` c on a.`parent_id`=c.`id`
				inner join `' . _makeTableName('stateunion') . '` d on c.`parent_id`=d.`id`
				order by a.`id` desc
				limit ' . static::$limits['news'] . ';';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('[Models::Index] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
			}
			foreach ($res as & $item) {
				if (preg_match_all('/\{shortdescription\}(.*)\{\/shortdescription\}/Usi', $item['description'], $matches)) {
					$item['short_description'] = implode('<br />', $matches[1]);
				}
				$item['image'] = '/uploads/images/stateunion/' . $item['state_id'] . '/country/' . $item['country_id'] .
						'/news/' . $item['id'] . '/' . $item['image'];
				$item['date'] = substr($item['date'], 0, 10);
				unset($item['description']); unset($item['country_id']); unset($item['state_id']);
			}
			$this->_data->set('data', $res, 'news_blog');
		}

		protected function _articlesRoster() {
			$sql = '
				select a.`id`, a.`inner_name`, a.`name`, a.`short_description`, a.`description`,
					b.`image`, c.`id` as `country_id`, d.`id` as `state_id`
				from `' . _makeTableName('article') .'` a
				left join `' . _makeTableName('logotypes') . '` b on (`model`="article" and b.`id`=a.`id`)
				inner join `' . _makeTableName('country') . '` c on a.`parent_id`=c.`id`
				inner join `' . _makeTableName('stateunion') . '` d on c.`parent_id`=d.`id`
				order by a.`id` desc
				limit ' . static::$limits['articles'] . ';';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('[Models::Index] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
			}
			foreach ($res as & $item) {
				if (preg_match_all('/\{shortdescription\}(.*)\{\/shortdescription\}/Usi', $item['description'], $matches)) {
					$item['short_description'] = implode('<br />', $matches[1]);
				}
				$item['image'] = '/uploads/images/stateunion/' . $item['state_id'] .
						'/country/' . $item['country_id'] .
						'/article/' . $item['id'] . '/' . $item['image'];
				unset($item['description']); unset($item['country_id']); unset($item['state_id']);
			}
			$this->_data->set('data', $res, 'article_blog');
		}

		protected function _countriesRoster() {
			$result = array();
			$sql = '
				select `inner_name`, `name` from `' . _makeTableName('country') . '`
				where `parent_id`=?
				order by `position_in_list` desc, `name` asc
				limit ' . static::$limits['countries'] . ';';
			for ($i = 1; $i < 6; $i++) {
				if (null === ($res = $this->_db->query($sql, $i))) {
					throw new \Exception('[Models::Index] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $i));
				}
				$result[] = $res;
			}
			$this->_data->set('data', $result, 'country_blog');
		}

		protected function _shoppingRoster() {
			$tables = array('shopping', 'souvenir');
			$result = array();
			foreach ($tables as $table) {
				$sql = '
					select `inner_name`, `name`, `short_description`, `description`
					from `' . _makeTableName($table) . '`
					order by `id` desc
					limit ' . static::$limits[$table] . ';';
				if (null === ($res = $this->_db->query($sql))) {
					throw new \Exception('[Models::Index] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
				}
				$result = array_merge($result, $res);
			}
/*			$sql = '
				select `inner_name`, `name`, `short_description`, `description`
				from `' . _makeTableName('shopping') . '`
				order by `id` desc
				limit ' . static::$limits['shopping'] . ';';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('[Models::Index] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
			}*/
			foreach ($result as & $item) {
				if (preg_match_all('/\{shortdescription\}(.*)\{\/shortdescription\}/Usi', $item['description'], $matches)) {
					$item['short_description'] = implode('<br />', $matches[1]);
				}
				unset($item['description']);
			}
			shuffle($result);
			$this->_data->set('data', $result, 'shopping_blog');
		}

		protected function _bannersRoster() {
			$sql = '
				select `id`, `href`, `image`, `alt_text`
				from `' . _makeTableName('banner') . '`
				where `expiration_date` > now()
				order by rand()
				limit ' . static::$limits['banners'] . ';';
			if (null === ($res = $this->_db->query($sql))) {
				throw new \Exception('[Models::Index] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql));
			}
			$sql = 'update `' . _makeTableName('banner') . '` set `show_count`=`show_count`+1, `expiration_date`=`expiration_date` where `id`=?;';
			foreach ($res as $item) {
				if (null === $this->_db->query($sql, $item['id'])) {
					throw new \Exception('[Models::Index] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $item['id']));
				}
			}
			$this->_data->set('data', $res, 'banners');
		}

	}

}