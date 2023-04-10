<?php

class Category{
    private $id;
    private $name;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getName(){
        return $this->name;
    }

    public function getAll(){
        $sql="SELECT *FROM categories;";
        $result = $this->db->query($sql);
        return $result;
    }

    public function save(){
        $insert="INSERT INTO categories VALUES(null,'{$this->getName()}')";
        $result=$this->db->query($insert);
    }

}