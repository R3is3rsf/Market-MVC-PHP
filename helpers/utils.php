<?php
class Utils{

    public static function exist(){
        if(!isset($_SESSION['login'])){
            header('location:'.base_url);
        }
    }

    public static function whoIs(){
        if(!isset($_SESSION['login']) || $_SESSION['login']->rol<>1){
            header('location:'.base_url);
        }
    }

    public static function deleteSesion($name){
        if(isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public static function image($id){
        $db = Database::connect();
        $sql = "select image from products where id=$id";
        $result = $db->query($sql)->fetch_all();
        return $result;
    } 


}