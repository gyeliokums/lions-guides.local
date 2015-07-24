<?php
namespace API\Models {
	class NewsList extends AbstractList {

		protected function _makeSQLQuery() {
			$sql = 'select a.`id`, a.`inner_name`, a.`name`, a.`short_description`, a.`description`, a.`create_time`,
						b.`image`
					from `' . _makeTableName('news') . '` a
					left join `' . _makeTableName('logotypes') . '` b on (b.`id`=a.`id` and `model`="news")
					where a.`parent_id`=?;';
			return $sql;
		}

		protected function _compileResult() {
			$item = func_get_arg(0);
			if (preg_match_all('/\{shortdescription\}(.*)\{\/shortdescription\}/Usi', $item['description'], $matches)) {
				$item['short_description'] = implode('<br />', $matches[1]);
			}
			unset($item['description']);
			$item['create_time'] = substr($item['create_time'], 0, 10);
			if (!empty($item['image'])) {
				$pos = $this->_data->get('data', 'breadcrumbs');
				$item['image'] = '/uploads/images/stateunion/' . $pos['state_id'] .
						'/country/' . $pos['country_id'] .
						'/news/' . $item['id'] . '/' . $item['image'];
			} else {
				unset($item['image']);
			}
			return $item;
		}

	}

}