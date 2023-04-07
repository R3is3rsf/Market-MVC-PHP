<?php
require_once 'models/User.php';
class UserController{
    public function index(){
        echo "UserController";
    }
    public function register(){
        require_once 'views/user/register.php';
    }
    public function save(){
        if(isset($_POST)){
            $user = new User();
            $user->setName($_POST['name']);
            $user->setLastname($_POST['lastname']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->save();
        }

    }
}