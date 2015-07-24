<?php
namespace API\Assistants {
	class CurrentPosition {

		static public function get() {
			$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$data = \API\Data\Collector::instance();
			$model = mb_strtolower($data->get('model'));
			$id = $data->get('id');
			switch ($model) {
				case 'lion':
					$sql = '
						select a.`id` as `lion_id`, a.`inner_name` as `lion_inner_name`, a.`name` as `lion_name`,
							b.`id` as `city_id`, b.`inner_name` as `city_inner_name`, b.`name` as `city_name`,
							c.`id` as `country_id`, c.`inner_name` as `country_inner_name`, c.`name` as `country_name`,
							d.`id` as `state_id`, d.`inner_name` as `state_inner_name`, d.`name` as `state_name`
						from `' . _makeTableName('lion') . '` a
						inner join `' . _makeTableName('city') . '` b on a.`parent_id`=b.`id`
						inner join `' . _makeTableName('country') . '` c on b.`parent_id`=c.`id`
						inner join `' . _makeTableName('stateunion') . '` d on c.`parent_id`=d.`id`
						where a.`id`=?;';
					break;
				case 'city':
				case 'article':
				case 'news':
				case 'kitchen':
				case 'guide':
				case 'souvenir':
				case 'shopping':
					$sql = '
						select a.`id` as `entity_id`, a.`inner_name` as `entity_inner_name`, a.`name` as `entity_name`,
							b.`id` as `country_id`, b.`inner_name` as `country_inner_name`, b.`name` as `country_name`,
							c.`id` as `state_id`, c.`inner_name` as `state_inner_name`, c.`name` as `state_name`
						from `' . _makeTableName($model) . '` a
						inner join `' . _makeTableName('country') . '` b on a.`parent_id`=b.`id`
						inner join `' . _makeTableName('stateunion') . '` c on b.`parent_id`=c.`id`
						where a.`id`=?;';
					break;
				case 'country':
					$sql = '
						select a.`id` as `country_id`, a.`inner_name` as `country_inner_name`, a.`name` as `country_name`,
							b.`id` as `state_id`, b.`inner_name` as `state_inner_name`, b.`name` as `state_name`
						from `' . _makeTableName('country') . '` a
						inner join `' . _makeTableName('stateunion') . '` b on a.`parent_id`=b.`id`
						where a.`id`=?;';
					break;
			}
			if (null === ($res = $db->query($sql, $id))) {
				throw new \Exception('[Assistants::CurrentPosition] Ошибка выполнения запроса: ' . $db->showQuery($sql, $id));
			}
			$res = $res[0];
			$data->remove('current', 'position');
			$data->set('current', $res, 'position');
		}

	}

}