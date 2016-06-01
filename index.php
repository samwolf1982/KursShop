<?php

// FRONT CONTROLLER

// Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// Подключение файлов системы
define('PATH_TO_SITE', dirname(__FILE__));

// на сервере закоментировать и разкоментировать  !!!!!!!!!!!!!!!!!   для загрузки фото
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
//define('ROOT', '/home/www/testfordel2.atwebpages.com');

require_once PATH_TO_SITE . '/components/Autoload.php';

// Вызов Router
$router = new Router();
$router->run();
