<?php

spl_autoload_register(function($class){
    $file = realpath(ROOT . '/' . str_replace('\\', '/', $class) . '.php');
    if (file_exists($file)){
        require_once $file;
    }
});

if (!PRODUCTION){
    require_once ROOT . '/vendor/core/dev.php';
}
