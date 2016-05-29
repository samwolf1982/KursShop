<?php
// FRONT CONTROLLER
// 1 общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2 подключение нужных файлов
define('SITE_ROOT', dirname(__FILE__));
session_start();
require_once SITE_ROOT . '/components/Router.php';

// 3 подключение к бд
//cоздать дефайны как в опенкарте для работы с бд добавить файл настроек в конфигах

//4 вызов роутов

$router = new Router();
$router->run();
