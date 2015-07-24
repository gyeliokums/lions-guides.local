<?php
namespace API\Data {
	class Collector {
		static protected
			$_data = array(
				'common' => null
			),
			$_instance = null;

		static public function instance() {
			if (null === static::$_instance) {
				static::$_instance = new static();
			}
			return static::$_instance;
		}

		protected function __construct() {
			if (session_id()) {
				static::$_data['common'] = !empty($_SESSION['common']) ? $_SESSION['common'] : null;
				static::$_data['authorization'] = !empty($_SESSION['auth']) ? $_SESSION['auth'] : null;
				static::$_data['position'] = !empty($_SESSION['position']) ? $_SESSION['position'] : null;
			}
		}

		public function set($key = null, $value = null, $storage = 'common') {
			if (null !== $key && null !== $value) {
				if (is_array($value) && is_array(static::$_data[$storage][$key])) {
					static::$_data[$storage][$key] = array_merge(static::$_data[$storage][$key], $value);
				} else {
					static::$_data[$storage][$key] = $value;
				}
			}
		}

		public function get($key = null, $storage = 'common') {
			$value = null;
			if (null !== $key && is_array(static::$_data[$storage]) && array_key_exists($key, static::$_data[$storage])) {
				$value = static::$_data[$storage][$key];
			}
			return $value;
		}

		public function remove($key = null, $storage = 'common') {
			if (null !== $key && is_array(static::$_data[$storage]) && array_key_exists($key, static::$_data[$storage])) {
				unset(static::$_data[$storage][$key]);
			}
		}

		public function setStorage($data = null, $storage = null) {
			if (null !== $data && null !== $storage) {
				static::$_data[$storage] = $data;
			}
		}

		public function clearStorage($name = null) {
			if (null !== $name && array_key_exists($name, static::$_data)) {
				static::$_data[$name] = null;
			}
		}

		public function getStorage($name = 'common') {
			return static::$_data[$name];
		}

		public function getAllStorages() {
			return static::$_data;
		}

		public function prepare() {
			$this->_getFromRequest();
		}

		protected function _getFromRequest() {
			if (0 < sizeof($_FILES)) {
				foreach ($_FILES as $name => $file) {
					if (is_array($_FILES[$name]['tmp_name']) && 0 < $_FILES[$name]['size']) {
						for ($i = 0, $l = sizeof($_FILES[$name]['tmp_name']); $i < $l; $i++) {
							if (!empty($_FILES[$name]['tmp_name'][$i])) {
								static::$_data['files'][$name][] = array(
									'tmp_name' => $_FILES[$name]['tmp_name'][$i],
									'name' => $_FILES[$name]['name'][$i],
									'error' => $_FILES[$name]['error'][$i],
									'size' => $_FILES[$name]['size'][$i],
									'type' => $_FILES[$name]['type'][$i]
								);
							}
						}
					} else {
						static::$_data['files'][$name] = $_FILES[$name];
					}
				}
			}
			foreach ($_GET as $key => $value) {
				static::$_data['common'][$key] = $value ? : true;
			}
			$storage = !empty(static::$_data['common']['model']) ? static::$_data['common']['model'] : 'common';
			foreach ($_POST as $key => $value) {
				static::$_data[$storage][$key] = $value;
			}
		}

		protected function _getFromModel() {

		}

		public function __destruct() {
			$_SESSION['position'] = static::$_data['position'];
			static::$_data = null;
		}

	}

}