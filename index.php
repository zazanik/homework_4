<?php

// FRONT COTROLLER

// 1. Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));
//require_once(ROOT.'/components/Router.php');
//require_once(ROOT.'/components/Db.php');

require __DIR__ . '/vendor/autoload.php';



$router = new zazanik\hw\components\Router();
$router->run();