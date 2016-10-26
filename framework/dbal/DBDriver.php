<?php

namespace fw\dbal;

use \PDO;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class DBDriver 
{
 
    private static $_instance = null;
    private $dbh;
    private $className = "stdClass";
    
    private function __construct(){
        $dsn = 'mysql:dbname=' . DBNAME . ';host=' . HOST;
        $this->dbh = new PDO($dsn, USER, PASS);
    }
	
    public static function get(){
        if(is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    
    public function setClassName($className){
        $this->className = $className;
    }
    
    public function query($sql, $params=[]){
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }
    
    public function execute($sql, $params=[]){
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
    }
    
    public function lastInsertId() {
        return$this->dbh->lastInsertId();
    }
}