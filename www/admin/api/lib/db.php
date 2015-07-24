<?php
namespace API\Lib {
	class DB {
		static
			$_instances = null,
			$_current = null;
		static public function init($type = null) {
			if (static::$_current == null && $type == null)
				throw new \Exception('DB type NOT declared!');
			if ($type != null)
				static::$_current = $type;
			if (!isset(static::$_instances[static::$_current])) {
				$dbType = '\API\Lib\PDO' . static::$_current;
				static::$_instances[static::$_current] = new $dbType();
			}
			return static::$_instances[static::$_current];
		}
	}
}
?>