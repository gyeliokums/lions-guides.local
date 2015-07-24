<?php
$lang = $_SESSION['language'] ? : \API\Config\Language::$current;
$matches = '';
preg_match('/(^\/.*\/)*\?.*/Ui', $_SERVER['REQUEST_URI'], $matches);
define(\API\Config\Parameters::$host, $matches[1]);
