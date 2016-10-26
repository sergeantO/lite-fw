<?php

namespace project\name1\controllers;

use project\controllers\Controller;

class Home extends Controller{
    
    public function __construct($params = []) {
        parent::__construct();
    }
    
    public function titleModule() {
        return 'name1';   
    }
    
    public function f($a, $b) {
        $this->loadModel('User', 'user');
        echo 'MODULE: name1</br>';
        $user = $this->user->get();
        $this->data('user', $user);
        $this->data('a1', $a);
        $this->data('b1', $b);
        $this->display('f');
    }
}
