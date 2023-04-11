<?php
class Utils{

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

}