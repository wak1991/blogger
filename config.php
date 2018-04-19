<?php
// проверка константы запрет на доступ
defined('BLOGGER') or die('Access denied');

// домен
define('PATH', 'http://blogger.ru/');

// модель
define('MODEL', 'model/model.php');

// контроллер
define('CONTROLLER', 'controller/controller.php');

// вид
define('VIEWS', 'views/');

// активный шаблон
define('TEMPLATE', VIEWS.'blogger/');

// сервер БД
define('HOST', 'localhost');

// пользователь
define('USER', 'root');

// пароль
define('PASS', '');

// БД
define('DB', 'blogger');

// название магазина - title
define('TITLE', 'Блог Дрозд');

// папка шаблонов административной части
define('ADMIN_TEMPLATE', 'templates/');

mysql_connect(HOST, USER, PASS) or die('No connect to server');
mysql_select_db(DB) or die('No connect to DB');
mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');