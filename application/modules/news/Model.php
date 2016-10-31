<?php

namespace app\modules\news;

use fw\core\base\AbstractModel;

/**
 * class NewsModel
 * @property public $id;
 * @property public $title;
 * @property public $date;
 * @property public $text;
 */
class Model extends AbstractModel
{  
    protected static $table = 'news';
}