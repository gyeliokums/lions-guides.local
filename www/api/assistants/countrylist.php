<?php
namespace API\Assistants {
	class CountryList {

		static public function get() {
			$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$data = \API\Data\Collector::instance();
			$sql = 'select * from `' . _makeTableName('stateunion') . '`;';
			if (null === ($stateunions = $db->query($sql))) {
				throw new \Exception('[Assistants::CountryList] Ошибка выполнения запроса: ' . $sql->showQuery($sql));
			}
			$result = array();
			foreach ($stateunions as $state) {
				$result[$state['id']]['name'] = $state['name'];
				$result[$state['id']]['inner_name'] = $state['inner_name'];
				$sql = 'select `inner_name`, `name` from `' . _makeTableName('country') . '` where `parent_id`=? order by `position_in_list` desc, `name` limit 5;';
				if (null === ($countries = $db->query($sql, $state['id']))) {
					throw new \Exception('[Assistants::CountryList] Ошибка выполнения запроса: ' . $sql->showQuery($sql, $state['id']));
				}
				foreach ($countries as $country) {
					$result[$state['id']]['children'][] = array('inner_name' => $country['inner_name'], 'name' => $country['name']);
				}
			}
			$data->set('data', $result, 'countrylist_blog');
			return;
			$sql[] = '
				select a.`id` as `us_id`, a.`inner_name` as `su_inner_name`, a.`name` as `su_name`, b.`inner_name` as `c_inner_name`, b.`name` as `c_name`
				from `' . _makeTableName('stateunion') . '` a
				left join `' . _makeTableName('country') . '` b on a.`id`=b.`parent_id`
				order by a.`id` asc, b.`position_in_list` desc, b.`name` asc
				';
			if (1 === func_num_args()) {
				$sql[] = 'limit ' . func_get_arg(0);
			}
			$sql = implode(' ', $sql) . ';';
			if (null === ($res = $db->query($sql))) {
				throw new \Exception('Ошибка выполнения запроса: ' . $db->showQuery($sql));
			}
			$result = array();
			foreach ($res as $item) {
				$result[$item['us_id']]['inner_name'] = $item['us_inner_name'];
				$result[$item['us_id']]['name'] = $item['us_name'];
				$result[$item['us_id']]['children'][] = array('inner_name' => $item['c_inner_name'], 'name' => $item['c_name']);
			}
			$data->set('data', $result, 'countrylist_blog');
		}

	}

}