<?php

require_once __DIR__ . '/../configs/constants.php';
require_once APP_PATH . '/configs/DB.php';
require_once FW_PATH . '/autoload.php';
require_once APP_PATH . '/configs/paths.php';


switch (MODE) {
    case 'dev':
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        require_once FW_PATH . '/dev.php';
    break;
    case 'prod':
        ini_set('error_reporting', ~E_ALL);
        ini_set('display_errors', 'off');
        ini_set('display_startup_errors', 'off');
    break;
}

use fw\core\Router;
Router::dispatch();