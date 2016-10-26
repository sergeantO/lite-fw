<?php

spl_autoload_register(function($class)
{  
    $path = explode("\\", $class);
    $dir = array_shift($path);
    $path = implode(DS, $path);
    
    switch ($dir){
        case 'fw' :
            $dir = FW_PATH;
            
            break;
        case 'app' :
            $dir = APP_PATH;
            break;
    }
    $file = realpath($dir . DS . $path . '.php');
    if (file_exists($file)){
        require_once $file;
    }
});

if (MODE == 'dev'){
    require_once FW_PATH . '/core/dev.php';
}
