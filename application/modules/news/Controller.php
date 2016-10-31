<?php

namespace app\modules\news;

use \fw\core\base\AbstractController;
use \fw\core\Template;
use \app\modules\news\Model;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Controller extends AbstractController { 
    public function indexAction(){
        $db = new Model;
        $news = Model::findAll();
        $view = new Template();
        $view->layout = TEMPLATE_MAIN;
        $view->content = APP_PATH . '/modules/news/views/all.php';
        $view->title = 'All News';
        $view->items = $news;
        $view->display();
    }
    
    public function getOneAction($id){    
        $item = Model::findById($id);
        $view = new Template();
        $view->layout = TEMPLATE_MAIN;
        $view->content = APP_PATH . '/modules/news/views/one.php';
        $view->title = 'News #' . $id;
        $view->assign('item', $item);
        $view->display();
    }
    
    public function addNewsAction(){
        $db = new Model;
        $db->title = 'Новость 4';
        $db->text = 'ОООООчень важная новость';
        $db->save();
    }
}
