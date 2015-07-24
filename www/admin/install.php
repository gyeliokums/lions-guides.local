<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
header('Content-Type: text/html; charset=UTF-8');
require_once 'api/lib/autoloader.php';
require_once 'api/lib/functions.php';
require_once 'defines.php';
echo 'Starting work...<br />';

$workType = isset($_REQUEST['work_type']) ? $_REQUEST['work_type'] : 'install';
$files = glob('./api/install/*.' . $workType . '.sql');
$contents = array();
foreach ($files as $file) {
	$contents[] = file_get_contents($file);
}
unset($files);
$queries = array();
$langList = \API\Config\Language::$list;
$langCount = sizeof($langList);
$dbName = 'tourism';
$dropPattern = '/##__DROP_START(.*)##__DROP_END/Uis';
$mainPattern = '/##__MAIN_START(.*)##__MAIN_END/Uis';
$patterns = array(
	'/##__DROP_START(.*)##__DROP_END/Uis',
	'/##__MAIN_START(.*)##__MAIN_END/Uis'
);
$queries = array();
foreach ($contents as $text) {
	foreach ($patterns as $pattern) {
		preg_match_all($pattern, $text, $matches);
		array_shift($matches);
		$queries = array_merge($queries, $matches[0]);
	}
}
$tmpQueries = array();
foreach ($queries as $query) {
	$tmpQuery = str_replace('##__DB_PREFIX', $dbName, $query);
	$tmpQueries[] = $tmpQuery;
	/*if (false === strpos($tmpQuery, '##__LANG_PREFIX')) {
		$tmpQueries[] = $tmpQuery;
	} else {
		foreach ($langList as $key => $value) {
			$tmpQueries[] = str_replace('##__LANG_PREFIX', $key, $tmpQuery);
		}
	}*/
}
$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
foreach ($tmpQueries as $sql) {
	echo '<br />Выполняем запрос:<br /><pre>', var_dump($sql), '</pre>';
	if (null === $db->query($sql)) {
		die('<span style="color: red;">Ошибка выполнения запроса!</span>');
	}
	echo '<span style="color: green;">Успех!</span><br />';
}
