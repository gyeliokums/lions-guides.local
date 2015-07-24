<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
header('Content-Type: text/html; charset=UTF-8');
require_once 'api/lib/autoloader.php';
require_once 'api/lib/functions.php';
$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
$sql = 'select `inner_name`, `model` from `' . _makeTableName(\API\Config\Parameters::$tablePrefix, 'modelslinks') . '` where `model` != "stateunion";';
if (null === ($res = $db->query($sql))) {
	throw new \Exception('Ошибка выполнения запроса: ' . $db->showQuery($sql));
}
$sitemap[] = '<?xml version="1.0" encoding="UTF-8"?>';
$sitemap[] = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
$sitemap[] = '<url><loc>http://' . $_SERVER['HTTP_HOST']. '/</loc></url>';
$sitemap[] = '<url><loc>http://' . $_SERVER['HTTP_HOST']. '/countries</loc></url>';
foreach ($res as $item) {
	if (0 === strcasecmp('country', $item['model'])) {
		$sitemap[] = '<url><loc>http://' . $_SERVER['HTTP_HOST'] . '/' . $item['inner_name'] . '/articles/</loc></url>';
		$sitemap[] = '<url><loc>http://' . $_SERVER['HTTP_HOST'] . '/' . $item['inner_name'] . '/news/</loc></url>';
		$sitemap[] = '<url><loc>http://' . $_SERVER['HTTP_HOST'] . '/' . $item['inner_name'] . '/cooking/</loc></url>';
		$sitemap[] = '<url><loc>http://' . $_SERVER['HTTP_HOST'] . '/' . $item['inner_name'] . '/souvenirs/</loc></url>';
		$sitemap[] = '<url><loc>http://' . $_SERVER['HTTP_HOST'] . '/' . $item['inner_name'] . '/guides/</loc></url>';
		$sitemap[] = '<url><loc>http://' . $_SERVER['HTTP_HOST'] . '/' . $item['inner_name'] . '/shopping/</loc></url>';
	}
	$sitemap[] = '<url><loc>http://' . $_SERVER['HTTP_HOST'] . '/' . $item['inner_name'] . '</loc></url>';
}
$sitemap[] = '</urlset>';
$sitemap = implode(PHP_EOL, $sitemap);
file_put_contents('../sitemap.xml', $sitemap);
header('Location: /admin/');
