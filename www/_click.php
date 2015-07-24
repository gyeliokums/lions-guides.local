<?php
session_start();
require_once 'api/lib/functions.php';
require_once 'api/lib/autoloader.php';
$sessionKey = sha1(session_id());
$string = $_GET['cid'];
$string = base64_decode($string);
$params = unserialize($string);
if (0 !== strcasecmp($sessionKey, $params['b'])) {
	header('HTTP/1.0 400 Bad Request');
	die('<h1>400 Bad Request!</h1>');
}
$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
$sql = 'select `href` from `' . _makeTableName('banner') . '` where `id`=?;';
if (null === ($res = $db->query($sql, $params['a']))) {
	header('HTTP/1.0 400 Bad Request');
	die('<h1>400 Bad Request!</h1>');
	echo $db->showQuery($sql, $params['a']) . '<br />';
	die('Unknown error!');
}
$href = $res[0]['href'];
$sql = 'update `' . _makeTableName('banner') . '` set `click_count`=`click_count`+1, `expiration_date`=`expiration_date` where `id`=? limit 1;';
$db->query($sql, $params['id']);
header('Location: ' . $href);