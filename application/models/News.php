<?php

namespace app\models;

use fw\core\base\AbstractModel;

/**
 * class NewsModel
 * @property public $id;
 * @property public $title;
 * @property public $date;
 * @property public $text;
 */
class News extends AbstractModel
{  
    protected static $table = 'news';
}