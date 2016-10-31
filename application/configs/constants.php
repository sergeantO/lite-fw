<?php

define('DOMAIN', 'http://lite-fw');

// функции отладки
define('MODE', 'dev'); //prod, dev;

// Шаблоны
define('LAYOUT', 'default');

// Константы путей.
define('ROOT', dirname(dirname(__DIR__)));
define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH', realpath(ROOT . '/application/'));
define('FW_PATH', realpath(ROOT . '/framework/'));