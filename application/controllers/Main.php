<?php

namespace app\controllers;

use \vendor\core\base\AbstractController;
use \vendor\core\Template;

class Main extends AbstractController
{ 
    public function indexAction() 
    {
        $view = new Template(); 
        
        $view->template = TEMPLATE_MAIN;
        $view->content = ROOT . '/app/views/main/index.php';
        
        $view->title = 'Start page';
        $view->text1 = 'It is text 1';
        $view->text2 = 'It is text 2';
        
        $view->display();
    }
}
