<?php
namespace API\Assistants {
	class CountryPosition {

		static public function get() {
			$data = \API\Data\Collector::instance();
			$model = mb_strtolower($data->get('model'));
			$id = $data->get('id');
			$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$sql = null;
			switch ($model) {
				case 'lion':
					$sql = '
						select a.`id`, a.`inner_name`, a.`name`
						from `' . _makeTableName(\API\Config\Parameters::$tablePrefix, 'country') . '` a
						inner join `' . _makeTableName(\API\Config\Parameters::$tablePrefix, 'city') . '` b  on b.`parent_id`=a.`id`
						inner join `' . _makeTableName(\API\Config\Parameters::$tablePrefix, 'lion'). '` c on c.`parent_id`=b.`id`
						where c.`id`=?;
						';
					break;
				case 'city':
				case 'article':
				case 'news':
				case 'kitchen':
				case 'guide':
				case 'souvenir':
				case 'shopping':
					$sql = '
						select a.`id`, a.`inner_name`, a.`name`
						from `' . _makeTableName('country') . '` a
						inner join `' . _makeTableName($model) . '` b on b.`parent_id`=a.`id`
						where b.`id`=?;';
					break;
				case 'country':
					$sql = '
						select a.`id`, a.`inner_name`, a.`name`
						from `' . _makeTableName('country') . '` a
						where a.`id`=?;';
					$id = $data->get('id');
					break;
			}
			if (null === $sql) {
				$data->set('country', 0, 'position');
				return;
			}
			if (null === ($res = $db->query($sql, $id))) {
				throw new \Exception('[Assistants::CountryPosition] Ошибка выполнения запроса: <br />' . $db->showQuery($sql, $id));
			}

			$res = $res[0];
			$data->set('country', $res, 'position');
		}

	}

}