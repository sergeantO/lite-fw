<?php

namespace app\modules\page;

use \fw\core\Template;

class Controller extends \app\modules\main\Controller
{ 
    //public $layout = false;
    
    public function indexAction() 
    {
        $this->loadLibrary('Time', 'time');   

        $this->assign('nowtime', $this->time->printTime());
        $this->assign('title', 'Start page');
        $this->assign('text1', 'It is text 1');
        $this->assign('text2', 'It is text 2'); //$this->text2 = 'It is text 2';   
    }
}
