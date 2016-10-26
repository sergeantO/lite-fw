<?php

namespace project\name1\models;

use project\models\Model;

/**
 * Description of User
 *
 * @author sergeanto
 */
class User extends Model{
    
    protected static $table = 'news';
    
    public function __construct() {
        parent::__construct();
    }
    public function get() {
        $this->db->select('text');
        //$this->db->from($this->table);
        $this->db->cond('title',':title');
        $this->db->addPrepare(':title','qazwsx');
        return $this->run();
    }
}
