<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('default_charset', 'UTF-8');
session_start();
$_SESSION['auth']['ttl'] = time() + 3600;
$_SESSION['KCFINDER'] = array('disabled' => false, 'uploadURL' => '/uploads/kcfinder');

header('Content-Type: text/html; charset=UTF-8');
require_once 'api/lib/autoloader.php';
require_once 'api/lib/functions.php';
require_once 'smarty/Smarty.class.php';
require_once 'defines.php';

$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
if (false === \API\Lib\Auth::check()) {
	$smarty->display('templates/auth.tpl');
	die();
}
$data = \API\Data\Collector::instance();
$uploadDir =
	'../uploads/images/stateunion/' . $data->get('country', 'position') .
	'/country/' . $data->get('city', 'position') .
	'/city/' . $data->get('lion', 'position') . '/cityphotogallery/';
$file = './api/ajax/file' . $_REQUEST['action'] . '.php';
include_once $file;
