<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('default_charset', 'UTF-8');
session_start();
header('Content-Type: text/html; charset=UTF-8');
require_once 'api/lib/autoloader.php';
require_once 'api/lib/functions.php';
require_once 'smarty/singlesmarty.php';
$smarty = SingleSmarty::instance();
$smarty->setTemplateDir('./templates/')
        ->setCompileDir('./cache/templates_c/')
        ->setPluginsDir(SMARTY_PLUGINS_DIR)
        ->setCacheDir('./cache/cache/')
        ->setConfigDir('./cache/configs/');
//$smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
$smarty->setCaching(0);

try {
	$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
	$data = \API\Data\Collector::instance();
	$role = ($_SESSION['role'] ? : ($_REQUEST['role'] ? : 'guest'));
	$role = 'guest';
	\API\Router\Main::init();
	$model = $data->get('model');
	if (null === $model) {
		header('Location: /404.php');
		$smarty->assign('data', $data->getAllStorages());
		$template = '404.tpl';
	} else {
		\API\Controllers\Main::run();
		$template = $role . '/' . $model . '.tpl';
	}
	$smarty->assign('data', $data->getAllStorages());
	$smarty->display($template);
} catch (\Exception $e) {
	echo '<h1>Error: ', $e->getMessage(), '</h1>';
}
