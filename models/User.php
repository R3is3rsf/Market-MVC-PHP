<?php
class User{
    private $id;
    private $name;
    private $lastname;
    private $email;
    private $password;
    private $rol;
    private $image;
    private $db;

    public function __construct(){
        $this->db= Database::connect();
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRol(){
        return $this->rol;
    }
    public function getImage(){
        return $this->image;
    }

    public function setName($name){
        $this->name=$this->db->real_escape_string($name);
    }
    public function setLastname($lastname){
        $this->lastname=$this->db->real_escape_string($lastname);
    }
    public function setEmail($email){
        $this->email=$this->db->real_escape_string($email);
    }
    public function setPassword($password){
        $this->password=password_hash($this->db->real_escape_string($password),PASSWORD_BCRYPT,['cost'=>4]);;
    }
    public function setRol($rol){
        $this->rol=$rol;
    }
    public function setImage($image){
        $this->image=$image;
    }

    public function save(){

       $sql= "INSERT INTO users VALUES (
        null,
        '{$this->getName()}',
        '{$this->getLastname()}',
        '{$this->getEmail()}',
        '{$this->getPassword()}',
         2,
        null
       )"; 
       $save= $this->db->query($sql);

       $result = false;
       if($save){
          $result=true;
       }
       return $result;
    }

    public function login($email,$password){

        $sql="SELECT *FROM users WHERE email='{$email}';";
        $select=$this->db->query($sql);
        $row = $select->fetch_object();
        
        $match  =password_verify($password,$row->password);  
        if($match){
            return $row;
        }else{
            return false;
        }
    }

}

