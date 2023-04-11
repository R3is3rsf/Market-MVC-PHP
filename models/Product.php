<?php

class Product{

    private $id;
    private $category_id;
    private $name;
    private $description;
    private $price;
    private $stock;
    private $offter;
    private $date;
    private $image;
    private $db;

    public function __construct()    {
        $this->db= Database::connect();
    }

    public function setId($id){
        $this->id=$id;
    }

    public function setCategoryId($category_id){
        $this->category_id=$category_id;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function setDescription($description){
        $this->description=$description;
    }

    public function setPrice($price){
        $this->price=$price;
    }

    public function setStock($stock){
        $this->stock=$stock;
    }

    public function setOffter($offter){
        $this->$offter=$offter;
    }

    public function setDate($date){
        $this->date=$date;
    }

    public function setImage($image){
        $this->image=$image;
    }

    public function getId(){
        return $this->id;
    }

    public function getCategoryId(){
        return $this->category_id;
    }

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getStock(){
        return $this->stock;
    }

    public function getOffter(){
        return $this->offter;
    }

    public function getDate(){
        return $this->date;
    }

    public function getImage(){
        return $this->image;
    }



}