<?php

namespace fw\core;

/* 
 * Работа с шаблонизацией страниц
 */
class Template 
{
    public $layout;
    public $content;
    public $route;
    
    public function __construct($route, $layout) {
        $this->route = $route;
        if ($layout === false){
            $this->layout = false;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
    }
    
    public function display($data) {
        //$this->data['items'] --> $items
        foreach ($data as $key => $val){
            $$key = $val;
        }  
        
        $file_view = APP_PATH . "/views/{$this->route['module']}/{$this->route['action']}.php";
        ob_start();
            echo $file_view;
        $content = ob_get_clean(); 
        
        if (false !== $this->layout){
            $file_layout = APP_PATH . "/templates/{$this->layout}/carcass.tpl.php";
            require $file_layout;
        }
    }
}