<?php

require_once __DIR__ . '/../configs/constants.php';
require_once ROOT . '/configs/DB.php';
require_once ROOT . '/vendor/core/autoload.php';
require_once ROOT . '/configs/paths.php';

use vendor\core\Router;
Router::dispatch();