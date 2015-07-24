<?php
function _vd($p) {
	echo '<pre>'; var_dump($p); echo '</pre>';
}

function _dvd($p) {
	_vd($p);
	die();
}

function _rmDir($dir = null) {
	if (null === $dir) {
		return;
	}
	$dir = explode('/', $dir);
	$dir = array_diff($dir, array(''));
	$dir = implode('/', $dir);
	if ($objs = glob($dir . '/*')) {
		foreach ($objs as $obj) {
			is_dir($obj) ? _rmDir($obj) : unlink($obj);
		}
	}
	rmdir($dir);
}

function _mkDir($dir = null) {
	if (null === $dir) {
		return;
	}
	$curDir = getcwd();
	$path = explode('/', $dir);
	$path = array_diff($path, array(''));
	foreach ($path as $p) {
		if (!empty($p)) {
			if (!is_dir($p)) {
				mkdir($p);
			}
			chdir($p);
		}
	}
	chdir($curDir);
}

function _makeTableName() {
	$args = func_get_args();
	$name = null;
	/*if (sizeof($args) > 0) {
		$name = implode('_', $args);
	}*/
	if (1 === sizeof($args)) {
		$args = array_merge(array(\API\Config\Parameters::$tablePrefix), $args);
	}
	if (2 === sizeof($args)) {
		$name = implode('_', $args);
	}
	return $name;
}

function _makeTableName2($name) {
	if (null === $name) {
		throw new \Expection('Не определено имя таблицы!');
	}
	$tableName = array();
	if (null !== \API\Config\Parameters::$tablePrefix) {
		$tableName[] = \API\Config\Parameters::$tablePrefix;
	}
	if (null !== \API\Config\Language::$current) {
		$tableName[] = \API\Config\Language::$current;
	}
	$tableName[] = $name;
	return implode('_', $tableName);
}

function _makePathToUpload() {
	$args = func_get_args();
	$name = null;
	if (sizeof($args) > 0) {
		$name = implode('/', $args) . '/';
	}
	return $name;
}

function _translit($s) {
	$s = (string) $s; // преобразуем в строковое значение
	$s = strip_tags($s); // убираем HTML-теги
	$s = str_replace(array('\n', '\r'), ' ', $s); // убираем перевод каретки
	$s = preg_replace('/\s+/', ' ', $s); // удаляем повторяющие пробелы
	$s = trim($s); // убираем пробелы в начале и конце строки
	$s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
	$s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
//	$s = preg_replace('/[^0-9a-z-_ ]/i', '', $s); // очищаем строку от недопустимых символов
	$s = str_replace(' ', '-', $s); // заменяем пробелы знаком минус
	return $s; // возвращаем результат
}

function _copyUploadedFile($file = null, $path = './upoloads/', $entropy = false) {
	$name = $fullName = '';
	if (is_array($file) && 5 === sizeof($file)) {
		if (is_uploaded_file($file['tmp_name']) && 0 < $file['size']) {
			$name = ($entropy ? uniqid() : '') . $file['name'];
			$fullName = $path . $name;
			if (!move_uploaded_file($file['tmp_name'], $fullName)) {
				throw new \Exception('Ошибка копирования файла ' . $file['tmp_name'] . ' => ' . $fullName);
			}
		}
	}
	return array('original' => $name, 'withPath' => $fullName);
}

function _cutString($str, $start = 0, $length = null) {
	if (null === $length || 0 >= $length) {
		return $str;
	}
	$strArray = explode(' ', $str);
	$curLength = $pos = 0;
	while ($curLength + mb_strlen($strArray[$pos], 'UTF-8') < $length) {
		$curLength += mb_strlen($strArray[$pos], 'UTF-8');
		$pos++;
	}
	$newStr =implode(' ', array_slice($strArray, 0, $pos)) . '&hellip;';
	//$d = mb_strlen($str) - mb_strlen($newStr);
	//$d *= 6;
	//$d = mb_strlen($newStr) + $d;
	//$newStr = str_pad($newStr, $d, '&nbsp;');
	return $newStr;
}