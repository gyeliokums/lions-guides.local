<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('session.use_only_cookies', 0);
ini_set('session.ise_cookies', 0);
ini_set('default_charset', 'UTF-8');
session_start();
//$_SESSION['auth']['ttl'] = time() + 3600;
//unset($_SESSION['auth']);
$_SESSION['KCFINDER'] = array('disabled' => false, 'uploadURL' => '/uploads/kcfinder');

header('Content-Type: text/html; charset=UTF-8');
require_once 'api/lib/autoloader.php';
require_once 'api/lib/functions.php';
//require_once 'smarty/Smarty.class.php';
require_once 'smarty/singlesmarty.php';
require_once 'defines.php';

$smarty = new Smarty();
$smarty->setTemplateDir('./templates/')
	->setCompileDir('./cache/templates_c/')
	->setPluginsDir(SMARTY_PLUGINS_DIR)
	->setCacheDir('./cache/cache/')
	->setConfigDir('./cache/configs/');
//$smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
$smarty->setCaching(0);
try {
	$errors = \API\Data\Error::instance();
	if ($errors->hasErrors()) {
		$smarty->assign('errMsg', $errors->getAsHTML());
	}
	if (false === \API\Lib\Auth::check()) {
		$smarty->display('templates/auth.tpl');
		die();
	}
	$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
	\API\Routers\Main::init();
	$data = \API\Data\Collector::instance();
	$data->prepare();
	foreach (\API\Config\Models::$opened as $key) {
		$modelList[$key] = \API\Config\Models::$all[$key];
	}
	$role = $data->get('role', 'authorization') ? : 'guest';
	$ctrl = $data->get('controller') ? : 'Main';
	$ctrl = '\\API\\Controllers\\' . $ctrl;
	$ctrl = new $ctrl();
	$ctrl->run();
	$order = $ctrl->getTemplate();
	$data->set('data', $modelList, 'menu');
	$errors = \API\Data\Error::instance();
	if ($errors->hasErrors()) {
		$smarty->assign('errMsg', $errors->getAsHTML());
	}
	$smarty->assign('data', $data->getAllStorages());
	$template = $role . '/' . $data->get('model') . '.' . $order . '.tpl';
	$tt = array('parent_id', 'name', 'description');
	$smarty->display($template);
} catch (\Exception $e) {
	echo '<h1>Error: ', $e->getMessage(), '</h1>';
}
