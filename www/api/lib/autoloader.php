<?php
spl_autoload_register(function ($name) {
		$file = str_replace('\\', '/' , '' . strtolower($name)) . '.php';
		if (file_exists($file)) {
			include $file;
		} elseif (file_exists('admin/' . $file)) {
			include 'admin/' . $file;
		}/* else {
			throw new \Exception('Class "' . $name . '" not found at path "' . $file . '"');
		}*/
	}
);
