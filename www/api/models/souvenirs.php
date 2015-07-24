<?php
namespace API\Models {
	class Souvenirs extends AbstractList {

		protected function _makeSQLQuery() {
			$sql = '
				select a.`inner_name`, a.`name`, a.`short_description`, a.`description`
				from `' . _makeTableName('souvenir') . '` a
				where a.`parent_id`=?;';
			return $sql;
		}

		protected function _compileResult() {
			$item = func_get_arg(0);
			if (preg_match_all('/\{shortdescription\}(.*)\{\/shortdescription\}/Usi', $item['description'], $matches)) {
				$item['short_description'] = implode('<br />', $matches[1]);
			}
			unset($item['description']);
			return $item;
		}

	}

}