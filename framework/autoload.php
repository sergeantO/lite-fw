<?php

spl_autoload_register(function($class)
{  
    $path = explode("\\", $class);
    $dir = array_shift($path);
    $path = implode(DS, $path);
    //echo $path . '<br/>';
    switch ($dir){
        case 'fw' :
            $dir = FW_PATH;
            
            break;
        case 'app' :
            $dir = APP_PATH;
            break;
    }
    //echo ($dir . DS . $path . '.php<br>');
    $file = realpath($dir . DS . $path . '.php');
    //echo $file . '<br/>';
    if (file_exists($file)){
        require_once $file;
    }
});

