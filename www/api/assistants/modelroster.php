<?php
namespace API\Assistants {
	class ModelRoster {

		static public function get() {
			$data = \API\Data\Collector::instance();
			$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$model = $data->get('model');
			$id = $data->get('id');
			$countryID = $data->get('country', 'position');
			$variables[] = $model;
			$sql[] = '
				select a.`id`, a.`inner_name`, a.`name`, a.`short_description`, a.`description`,
					' . ('news' === $model ? 'a.`create_time`, ' : '') . 'b.`image`
				from `' . _makeTableName($model) . '` a
				left join `' . _makeTableName('logotypes') . '` b on (b.`model`=? and a.`id`=b.`id`)';
			if (null !== $countryID) {
				$sql[] = ' where a.`parent_id`=?';
				$variables[] = $countryID['id'];
			}
			$sql[] = 'order by a.`id` desc';
			if (0 < func_num_args() && 0 < $cnt = func_get_arg(0)) {
				$sql[] = 'limit ' . $cnt;
			}
			$sql = implode(' ', $sql) . ';';
			if (null === ($res = $db->query($sql, $variables))) {
				throw new \Exception('[Assistants::ModelRoster] Ошибка выполнения запроса: ' . $db->showQuery($sql, $variables));
			}
			$currentPosition = $data->get('current', 'position');
			$pos = $currentPosition;
			foreach ($res as & $item) {
				if (preg_match_all('/\{shortdescription\}(.*)\{\/shortdescription\}/Usi', $item['description'], $matches)) {
					$item['short_description'] = implode('<br />', $matches[1]);
				}
				unset($item['description']);
				if (isset($iem['image']) && !empty($item['image'])) {
					switch (sizeof($pos)) {
						case 2:
							$item['image'] = '/uploads/images/stateunion/' . $pos['state_id'] .
									'/country/' . $pos['country_id'] . '/' . $item['image'];
							break;
						case 3:
							$item['image'] = '/uploads/images/stateunion/' . $pos['state_id'] .
									'/country/' . $pos['country_id'] .
									'/' . $model . '/' . $pos[$model . '_id'] . '/' . $item['image'];
							break;
						case 4:
							$item['image'] = '/uploads/images/stateunion/' . $pos['state_id'] .
									'/country/' . $pos['country_id'] . '/city/' . $pos['city_id'] .
									'/lion/' . $pos['lion_id'] . '/' . $item['image'];
							break;
					}
				}
			}
			$data->set('id', $id);
			$data->remove('current', 'position');
			$data->set('current', $currentPosition, 'position');
			$data->set('country', $countryID, 'position');
			$data->set('data', $res, $model . '_blog');
		}

	}

}