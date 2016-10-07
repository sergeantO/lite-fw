<?php

namespace app\controllers;

use \vendor\core\base\AbstractController;
use \vendor\core\Template;
use \app\models\News as Model;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class News extends AbstractController { 
    public function indexAction(){
        $db = new Model;
        $news = Model::findAll();
        $view = new Template();
        $view->template = TEMPLATE_MAIN;
        $view->content = ROOT . '/app/views/news/all.php';
        $view->title = 'All News';
        $view->items = $news;
        $view->display();
    }
    
    public function getOneAction($id){    
        $item = Model::findById($id);
        $view = new Template();
        $view->template = TEMPLATE_MAIN;
        $view->content = ROOT . '/app/views/news/one.php';
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
