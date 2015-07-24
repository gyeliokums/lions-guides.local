<?php
namespace API\Data {
	class Error {
		static protected
			$_hasErrors = false,
			$_counters = array(
				'general' => 0,
				'warning' => 0,
				'notice' => 0
			),
			$_data = array(
				'general' => null,
				'warning' => null,
				'notice' => null,
			),
			$_instance = null;

		static public function instance() {
			if (null === static::$_instance) {
				static::$_instance = new static();
			}
			return static::$_instance;
		}

		protected function __construct() {
			if (is_array($_SESSION['ERRORS'])) {
				static::$_counters = $_SESSION['ERRORS']['COUNTERS'];
				static::$_data = $_SESSION['ERRORS']['DATA'];
				static::$_hasErrors = true;
				$_SESSION['ERRORS'] = null;
			}
		}

		public function set($value = null, $storage = 'general') {
			if (null !== $value) {
				static::$_hasErrors = true;
					static::$_data[$storage][] = $value;
				static::$_counters[$storage]++;
			}
		}

		public function getAsHTML() {
			$levels = array('general' => 'danger', 'warning' => 'warning', 'notice' => 'info');
			$names = array('general' => 'Критическая ошибка!', 'warning' => 'Важное предупреждение!', 'notice' => 'Предупреждение');
			ob_start();
			foreach (static::$_counters as $key => $size) {
				if (0 < $size) {
					$level = $levels[$key];
					$name = $names[$key];
					$text = implode('<br />', static::$_data[$key]);
					echo "
						<div class='alert alert-block alert-{$level} fade in'>
						<button type='button' class='close close-sm' data-dismiss='alert'><i class='fa fa-times'></i></button>
						<strong>{$name} Total: {$size}</strong><br />
						{$text}</div>";
					static::$_data[$key] = null;
					static::$_counters[$key] = 0;
				}
			}
			$ret = ob_get_clean();
			static::$_hasErrors = false;
			return $ret;
		}

		public function hasErrors() {
			return static::$_hasErrors;
		}

		public function __destruct() {
			if (true === static::$_hasErrors) {
				$_SESSION['ERRORS']['DATA'] = static::$_data;
				$_SESSION['ERRORS']['COUNTERS'] = static::$_counters;
			}
		}

	}

}