<?php
namespace API\Router {
	class Main {
		static protected
			$_consts = array(
				'/^$/Ui' => 'index',
				'/^\/$/Ui' => 'index',
				'/^\/(.+)\/(cooking)\/{0,1}$/Ui' => 'cooking',
				'/^\/(.+)\/(guides)\/{0,1}$/Ui' => 'guides',
				'/^\/(.+)\/(news)\/{0,1}$/Ui' => 'newslist',
				'/^\/(.+)\/(articles)\/{0,1}$/Ui' => 'articles',
				'/^\/(.+)\/(souvenirs)\/{0,1}$/Ui' => 'souvenirs',
				'/^\/(.+)\/(shopping)\/{0,1}$/Ui' => 'shoppinglist',
				'/^\/countries\/{0,1}$/Ui' => 'countries'
			),
			$_associations = array(
				'cooking' => 'kitchen',
				'guides' => 'guide',
				'newslist' => 'news',
				'articles' => 'article',
				'souvenirs' => 'souvenir',
				'shoppinglist' => 'shopping'
			);

		static public function init() {
			$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$data = \API\Data\Collector::instance();
			$matches = null;
			$query = $_SERVER['REQUEST_URI'];
			list($query, $vars) = explode('?', $query);
			$model = null;
			foreach (static::$_consts as $pattern => $model) {
				if (preg_match($pattern, $query, $matches)) {
					$matches[2] = trim($matches[2], '/');
					break;
				}
				$model = null;
			}
			if (array_key_exists($matches[2], static::$_associations)) {
				$matches[2] = static::$_associations[$matches[2]];
			}
			if (null !== $model) {
				$data->set('model', $model);
				if (is_array($matches)) {
					$matches = array_diff($matches, array(''));
					array_shift($matches);
					$data->set('queryArray', $matches);
					$table = $matches[1];
					$in = $matches[0];
					$sql = 'select `link_id`, `model`, `inner_name` from `' . _makeTableName('modelslinks') . '` where `inner_name`=?;';
					if (null !== ($res = $db->query($sql, $in))) {
						$res = $res[0];
						if ($res['model'] !== 'index') {
							$data->set('id', $res['link_id']);
							$data->set('country', array('id' => $res['link_id'], 'inner_name' => $res['inner_name']), 'position');
						}
					}
				}
			} else {
				$query = trim($query, '/');
				$sql = 'select * from `' . _makeTableName('modelslinks') . '` where `inner_name`=?;';
				$res = $db->query($sql, $query);
				if (null !== $res && 1 === sizeof($res)) {
					$res = $res[0];
					$data->set('model', $res['model']);
					$data->set('id', $res['link_id']);
				}
			}
		}

	}

}