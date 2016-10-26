<?php
// функции отладки
define('MODE', 'dev'); //prod, dev;

// Шаблоны
define(TEMPLATE_MAIN, 'default');
define(TEMPLATE_ADMIN, 'admin');

// Константы путей.
define('ROOT', dirname(dirname(__DIR__)));
define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH', realpath(ROOT . '/application/'));
define('FW_PATH', realpath(ROOT . '/framework/'));