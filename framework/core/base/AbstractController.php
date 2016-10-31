<?php

namespace fw\core\base;

abstract class AbstractController {
    
    public $route = [];
    public $layout = '';
    private $data = [];

    public function __construct($route) {
        $this->route = $route;
    }
    
    public function loadModel($titleModule, $aliasModel) 
    {
        $pathModel = 'application/modules/' . $titleModule . '/Model.php';
        $titleModelInst = '\app\\'. $titleModule .'\\models\\' . $titleModel;

        if (file_exists($pathModel)){
            require_once $pathModel;
            $this->$aliasModel = new $titleModelInst();
            return true;
        }
        
        return false;
    }
    
    public function loadLibrary($titleLibrary, $aliasLibrary) 
    {
        $pathAppLib = APP_PATH . '/libraries/' . $titleLibrary . '.php';
        
        if (file_exists($pathAppLib)) {
            require_once $pathAppLib;
            $titleLibrary = '\app\libraries\\' . $titleLibrary;
            $this->$aliasLibrary = new $titleLibrary;
            return true;
        }
        
        return false;
    }
    
    public function assign($name, $value){
        $this->data[$name] = $value;
    }
    
    public function render() 
    {
        (new \fw\core\Template($this->route, $this->layout))->display($this->data);
    }
    
}
