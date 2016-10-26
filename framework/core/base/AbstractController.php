<?php

namespace vendor\core\base;

abstract class AbstractController {
    
    public $route = [];
    
    public function __construct($route) {
        $this->route = $route;
    }
    
}
