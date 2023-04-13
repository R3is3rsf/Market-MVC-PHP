<?php
require_once 'models/User.php';
class UserController{
    public function index(){
        echo "UserController";
    }
    public function register(){
        //Utils::whoIs();
        require_once 'views/user/register.php';
    }
    public function save(){
        //Utils::whoIs();
        if(isset($_POST)){

            $name = isset($_POST['name']) ? $_POST['name'] : false;
            $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            $error=array();

            if(empty($name) || is_numeric($name) || preg_match("/[0-9]/",$name)){
                $error['name']="Name  $name is not valid";
            }
            if(empty($lastname) || is_numeric($lastname) || preg_match("/[0-9]/",$lastname)){
                $error['lastname']="Lastname $lastname is not valid";
            }
            if(empty($email) ||  !filter_var($email,FILTER_VALIDATE_EMAIL)){
                $error['email']="Email $email is not valid";
            }
            if(empty($password)){
                $error['password'] = "Password is empty";
            }

            if(count($error)==0){

                $user = new User();
                $user->setName($name);
                $user->setLastname($lastname);
                $user->setEmail($email);
                $user->setPassword($password);
                $save =  $user->save();

                if($save){
                    $_SESSION['register']= "COMPLETE";
                }else{
                    $_SESSION['register']= "FAIL";
                }    
            }else{
                $_SESSION['error'] = $error;
            }
  
        }else{
            $_SESSION['register']= "FAIL";
        }
        header('location:'.base_url.'user/register');

    }

    public function login(){
        if(isset($_POST)){
            $email= $_POST['email'];
            $password= $_POST['password'];
            $user= new User();
 
            $result = $user->login($email,$password);
            if(is_object($result) && $result){
                $_SESSION['login']=$result;
            }
            header('location:'.base_url);
        }
    }

    public function logout(){
          if($_SESSION['login']){
            unset($_SESSION['login']);

          }
            header('location:'.base_url);

        
    }

}