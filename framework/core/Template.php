<?php

namespace fw\core;

/* 
 * Работа с шаблонизацией страниц
 */
class Template 
{
    protected $data = [];
    public $template = 'default';
    public $content = '';
    
    public function assign($name, $value){
        $this->data[$name] = $value;
    }
    
    public function __set($k, $v) {
         $this->data[$k] = $v;
    }
    
    public function display() {
        //$this->data['items'] --> $items
        foreach ($this->data as $key => $val){
            $$key = $val;
        }
        ob_start();
            $content = $this->content;
            include APP_PATH . '/templates/' . $this->template . '/carcass.tpl.php';
            $output = ob_get_contents();
        ob_end_clean();
        echo $output;
    }
}