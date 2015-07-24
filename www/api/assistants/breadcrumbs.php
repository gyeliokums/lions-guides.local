<?php
namespace API\Assistants {
	class  BreadCrumbs {

		static public function get() {
			$data = \API\Data\Collector::instance();
			$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$model = mb_strtolower($data->get('model'));
			$sql = null;
			switch ($model) {
				case 'lion':
					$sql = '
						select
							a.`id` as `state_id`, a.`inner_name` as `state_inner_name`, a.`name` as `state_name`,
							b.`id` as `country_id`, b.`inner_name` as `country_inner_name`, b.`name` as `country_name`,
							c.`id` as `entity_id`, c.`inner_name` as `entity_inner_name`, c.`name` as `entity_name`,
							d.`id` as `lion_id`, d.`inner_name` as `lion_inner_name`, d.`name` as `lion_name`
						from `' . _makeTableName('lion') . '` d
						inner join `' . _makeTableName('city') . '` c on d.`parent_id`=c.`id`
						inner join `' . _makeTableName('country') . '` b on c.`parent_id`=b.`id`
						inner join `' . _makeTableName('stateunion') . '` a on b.`parent_id`=a.`id`
						where d.`id`=?;';
					$id = $data->get('id');
					break;
				case 'city':
				case 'article':
				case 'articles':
				case 'news':
				case 'newslist':
				case 'kitchen':
				case 'cookong':
				case 'guide':
				case 'guides':
				case 'souvenir':
				case 'souvenirs':
				case 'shopping':
				case 'soppinglist':
					$sql = '
						select
							a.`id` as `country_id`, a.`inner_name` as `country_inner_name`, a.`name` as `country_name`,
							b.`id` as `state_id`, b.`inner_name` as `state_inner_name`, b.`name` as `state_name`
						from `' . _makeTableName('country') . '` a
						inner join `' . _makeTableName('stateunion') . '` b on a.`parent_id`=b.`id`
						where a.`id`=?;';
					$id = $data->get('country', 'position');
					$id = $id['id'];
					break;
				case 'country':
					$sql = '
						select
							a.`id` as `state_id`, a.`inner_name` as `state_inner_name`, a.`name` as `state_name`
						from `' . _makeTableName(\API\Config\Parameters::$tablePrefix, 'stateunion') . '` a,
							`' . _makeTableName('country') . '` b
						where b.`id`=? and b.`parent_id`=a.`id`;';
					$id = $data->get('id');
					$id = $id['id'];
					break;
			}
			if (null !== $sql) {
				if (null === ($res = $db->query($sql, $id))) {
					throw new \Exception('[Assistants::BreadCrumbs] Ошибка выполнения запроса: ' . $db->showQuery($sql, $id));
				}
			}
			$res = $res[0];
			_vd($res);
			$data->set('data', $res, 'breadcrumbs');
		}

	}
}