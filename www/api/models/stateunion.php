<?php
namespace API\Models {
	class StateUnion extends AbstractList {

		public function get() {
			$model = $this->_data->get('model');
			$id = $this->_data->get('id');
			$sql = '
				select a.`name` as `state_name`, b.`inner_name`, b.`name`
				from `' . _makeTableName('stateunion') . '` a
				left join `' . _makeTableName('country') . '` b on b.`parent_id`=a.`id`
				where a.`id`=?;';
			if (null === ($res = $this->_db->query($sql, $id))) {
				throw new \Exception('[Models\\StateUnion] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $id));
			}
			foreach ($res as $item) {
				$result[$item['state_name']][] = array('inner_name' => $item['inner_name'], 'name' => $item['name']);
			}
			$this->_data->set($model, $result);
			$this->_compileBlogs();
			$this->_runAssistants();
		}

	}

}