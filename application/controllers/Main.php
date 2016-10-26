<?php

namespace app\controllers;

use \fw\core\base\AbstractController;
use \fw\core\Template;

class Main extends AbstractController
{ 
    public function indexAction() 
    {
        $view = new Template(); 
        
        $view->template = TEMPLATE_MAIN;
        $view->content = APP_PATH . '/views/main/index.php';
        
        $view->title = 'Start page';
        $view->text1 = 'It is text 1';
        $view->text2 = 'It is text 2';
        
        $view->display();
    }
}
