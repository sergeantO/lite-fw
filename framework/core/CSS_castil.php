<?php

$css = file_get_contents(ROOT . '/templates/' . TEMPLATE_MAIN . '/css/main.css');
$mini = array(" ", "\r", "\n", "\r\n");
$css = str_replace($mini, "", $css); 
echo $css;