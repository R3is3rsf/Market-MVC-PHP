<?php

class Database{
    public static function connect(){
        $db= new mysqli('localhost','root','','store');
        $db->query("SET NAMES 'utf9'");
        return $db;
    }
}