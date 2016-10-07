<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//debug($var, __CLASS__, __LINE__, true);
//debug($var, __CLASS__, __LINE__);
function debug ($var, $class, $line, $die = 0){
    echo "<div style='position:fixed; bottom:5px; right:5px; border:1px solid #000; padding: 5px; overflow:hidden;'>";
        echo "DEBUG ($class: $line) <hr>";
        echo "<pre>" ;
            echo var_dump($var); 
        echo "</pre>";
    echo "</div>";
    
    if ($die) die();
}