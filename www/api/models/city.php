<?php
namespace API\Models {
	class City extends AbstractItem {

		public function get() {
			$model = $this->_data->get('model');
			$parent_id = $this->_data->get('id');
			list($link, $table) = $this->_data->get('queryArray');
			$this->_data->set('model', $table);
			$this->_runAssistants();
			$this->_breadcrumbs();
			$this->_currentPosition();
			$sql = $this->_makeSQLQuery();
			if (null === ($res = $this->_db->query($sql, $parent_id))) {
				throw new \Exception('[Models::City] Ошибка выполнения запроса:' . $this->_db->showQuery($sql, $parent_id));
			}
			foreach ($res as & $item) {
				$item = $this->_compileResult($item);
			}
			$this->_data->set('data', $res, 'entity');
			$this->_compileBlogs();
			$this->_data->set('model', $model);
		}

		protected function _makeSQLQuery() {
			$sql = 'select a.`id`, a.`inner_name`, a.`name`, a.`short_description`, a.`description`, b.`image_name`
				from `' . _makeTableName('lion') . '` a
				left join `' . _makeTableName('lionimagepreview') . '` b on b.`parent_id`=a.`id`
				where a.`parent_id`=?;';
			return $sql;
		}

		protected function _compileResult() {
			$item = func_get_arg(0);
			if (preg_match_all('/\{shortdescription\}(.*)\{\/shortdescription\}/Usi', $item['description'], $matches)) {
				$item['short_description'] = implode('<br />', $matches[1]);
			}
			unset($item['description']);
			if (!empty($item['image_name'])) {
				$pos = $this->_data->get('data', 'breadcrumbs');
				$item['image'] = '/uploads/images/stateunion/' . $pos['state_id'] .
						'/country/' . $pos['country_id'] .
						'/city/' . $pos['entity_id'] . '/lion/' . $item['id'] .
						'/' . $item['image_name'];
			}
			unset($item['image_name']);
			return $item;
		}

	}

}