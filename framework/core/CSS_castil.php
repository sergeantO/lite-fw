<?php

$css = file_get_contents(APP_PATH . '/templates/' . LAYOUT . '/css/main.css');
$mini = array(" ", "\r", "\n", "\r\n");
$css = str_replace($mini, "", $css); 
echo $css;