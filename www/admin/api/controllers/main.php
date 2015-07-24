<?php
namespace API\Controllers {
	class Main {
		static protected
			$_models = null,
			$_transactionOn = false,
			$_actions = array('add', 'update', 'remove', 'backup', 'restore');

		protected
			$_model,
			$_action,
			$_db,
			$_template;

		public function __construct() {
			static::$_models = \API\Config\Models::$opened;
			$this->_db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$data = \API\Data\Collector::instance();
			$mtmp = $data->get('model');
			if (!in_array($mtmp, static::$_models)) {
				$mtmp = \API\Config\Models::$default;
				$data->set('model', $mtmp);

			}
			$mtmp = '\API\Models\\' . $mtmp;
			$this->_model = $mtmp::instance();
			$this->_action = $data->get('action');
		}

		public function run1() {
			$data = \API\Data\Collector::instance();
			$this->_template = 'list';
			$action = $this->_action;
			if (in_array($action, static::$_actions) && $data->get('save')) {
				try {
					static::$_transactionOn = true;
					$this->_db->beginTransaction();
					$this->_model->$action();
					$this->_db->commit();
					$id = $data->get('id');
					$model = $data->get('model');
					$parent_id = $data->get('parent_id', $model);
					$for = $data->get('for');
					header('Location: ?model=' . $model . '&parent_id=' . $parent_id . '&for=' . $for);
				} catch (\Exception $e) {
					if (true === static::$_transactionOn) {
						$this->_db->rollBack();
					}
					$errorText = "
						Модель: {$data->get('model')}<br />
						Метод: {$action}<br />
						Возможная причина: Попытка ввести не уникальные значения в поля \"URL\" или \"название объекта\"<br />
						Текст ошибки: {$e->getMessage()}<br />
						PDO::errorCode: {$this->_db->errorCode()}<br />
						PDO::errorInfo: {$this->_db->errorInfo()}";
					\API\Data\Error::instance()->set($errorText);

				}
			}
			if (null !== $data->get('sender')) {
				$mtmp = '\\API\\Models\\' . $data->get('sender');
				$this->_model = $mtmp::instance();
			}
			if (0 === strcasecmp('add', $action) || (0 === strcasecmp('update', $action) && null !== $data->get('id'))) {
				$this->_model->get();
				$this->_template = 'item';
			} else {
				$this->_model->catalog();
			}
		}

		public function run() {
			$data = \API\Data\Collector::instance();
			$this->_template = 'list';
			$model = $data->get('model');
			$action = $data->get('action') ? : $data->get('action', $model);
			$submit = $data->get('submit') ? : $data->get('submit', $model);
			$parent_id = $data->get('parent_id') ? : $data->get('parent_id', $model);
			try {
				if (null !== $submit || 0 === strcmp('remove', $action)) {
					if (in_array($action, static::$_actions) && false !== stripos($submit, 'save')) {
						static::$_transactionOn = true;
						$this->_db->beginTransaction();
						$this->_model->$action();
						$this->_db->commit();
					}
					if (false !== stripos($submit, 'close')) {
						if (null !== $data->get('referrer')) {
							$model = $data->get('referrer');
						}
						header('Location: ?model=' . $model . '&parent_id=' . $parent_id . '&for=' . $data->get('for'));
					} else {
						$data->set('action', 'update');
					}
				}
			} catch (\Exception $e) {
				if (true === static::$_transactionOn) {
					$this->_db->rollBack();
				}
				$errorText = "
						Модель: {$data->get('model')}<br />
						Метод: {$action}<br />
						Возможная причина: Попытка ввести не уникальные значения в поля \"URL\" или \"название объекта\"<br />
						Текст ошибки: {$e->getMessage()}<br />
						PDO::errorCode: {$this->_db->errorCode()}<br />
						PDO::errorInfo: {$this->_db->errorInfo()}";
				\API\Data\Error::instance()->set($errorText);
			}
			if (0 === strcasecmp('add', $action) || (0 === strcasecmp('update', $action) && null !== $data->get('id'))) {
				$this->_template = 'item';
				$this->_model->get();
			} else {
				$this->_model->catalog();
			}
		}

		public function getTemplate() {
			return $this->_template;
		}

	}

}