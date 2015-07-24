<?php
namespace API\Models {
	class Country extends AbstractItem {

		public function get() {
/*			$model = $this->_data->get('model');
			$this->_runAssistants();
			$sql = 'select * from `' . _makeTableName($model) . '` where `id`=?;';
			if(null === ($res = $this->_db->query($sql, $id))) {
				throw new \Exception('[Models::' . $model . '] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $id));
			}
			$res = $res[0];
			$this->_smarty->assign('_inner_name', $res['inner_name']);
			$this->_smarty->assign('_page_title', $res['title']);
			$this->_smarty->assign('_page_keywords', $res['keywords']);
			$this->_smarty->assign('_page_description', $res['meta_description']);
			$res['description'] = str_replace(array('{shortdescription}', '{/shortdescription}'), array('', ''), $res['description']);
			$res['lions'] = unserialize($res['lions']);
			$res['guides'] = unserialize($res['guides']);
			$country = $res;
*/
			parent::get();
			$country = $this->_data->getStorage('entity');
			$country['data']['lions'] = unserialize($country['data']['lions']);
			$country['data']['guides'] = unserialize($country['data']['guides']);
			$id = $this->_data->get('id');
			$sql = '
				select a.`id`, a.`inner_name`, a.`name`, a.`short_description`, a.`description`, b.`image`
				from `' . _makeTableName('city') . '` a
				left join `' . _makeTableName('logotypes') . '` b on (b.`id`=a.`id` and `model`="city")
				where a.`parent_id`=?;';
			if (null === ($cities = $this->_db->query($sql, $id))) {
				throw new \Exception('[Models::Country] Ошибка выполнения запроса: ' . $this->_db->showQuery($sql, $id));
			}
			$pos = $this->_data->get('data', 'breadcrumbs');
			foreach ($cities as & $item) {
				if (preg_match_all('/\{shortdescription\}(.*)\{\/shortdescription\}/Usi', $item['description'], $matches)) {
					$item['short_description'] = implode('<br />', $matches[1]);
				}
				unset($item['description']);
				$item['image'] = '/uploads/images/stateunion/' . $pos['state_id'] .
						'/country/' . $pos['country_id'] . '/city/' . $item['id'] . '/' . $item['image'];
			}
			$country['data']['cities'] = $cities;
			$this->_data->setStorage($country, 'entity');
			//$this->_compileBlogs();
		}

	}

}