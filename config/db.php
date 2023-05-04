<?php

class Database{
    public static function connect(){
        $db= new mysqli('localhost','root','123456','store');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}