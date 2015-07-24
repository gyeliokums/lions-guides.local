<?php
namespace API\Models {
	class Articles extends AbstractList {

		protected function _makeSQLQuery() {
			$sql = 'select a.`id`, a.`inner_name`, a.`name`, a.`short_description`, a.`description`, b.`image`
				from `' . _makeTableName('article') . '` a
				left join `' . _makeTableName('logotypes') . '` b on (b.`id`=a.`id` and `model`="article")
				where a.`parent_id`=?;';
			return $sql;
		}

		protected function _compileResult() {
			$item = func_get_arg(0);
			if (preg_match_all('/\{shortdescription\}(.*)\{\/shortdescription\}/Usi', $item['description'], $matches)) {
				$item['short_description'] = implode('<br />', $matches[1]);
			}
			unset($item['description']);
			if (!empty($item['image'])) {
				$pos = $this->_data->get('data', 'breadcrumbs');
				$item['image'] = '/uploads/images/stateunion/' . $pos['state_id'] .
						'/country/' . $pos['country_id'] .
						'/article/' . $item['id'] . '/' . $item['image'];
			} else {
				unset($item['image']);
			}
			return $item;
		}

	}

}