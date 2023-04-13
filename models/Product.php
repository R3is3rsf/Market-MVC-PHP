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
        $this->id=$this->db->real_escape_string(intval($id));

    }
    public function setCategoryId($category_id){
        //$this->category_id=intval($category_id);
        $this->category_id=$this->db->real_escape_string(intval($category_id));

    }

    public function setName($name){
        $this->name=$name;
    }

    public function setDescription($description){
        $this->description=$description;
    }

    public function setPrice($price){
        //$this->price=floatval($price);
        $this->price=$this->db->real_escape_string(floatval($price));

    }

    public function setStock($stock){
        //$this->stock=intval($stock);
        $this->stock=$this->db->real_escape_string(intval($stock));
    }

    public function setOffter($offter){
        //$this->$offter=intval($offter);
        $this->offter=$this->db->real_escape_string(intval($offter));

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

    public function getAll(){
        $products= $this->db->query("SELECT p.*,c.name as 'categoria' FROM products p INNER JOIN categories c ON p.category_id=c.id;");
        return $products;
    }

    public function save(){
        Utils::whoIs();
        $insert="INSERT INTO products VALUES (
            null,
            {$this->getCategoryId()},
            '{$this->getName()}',
            '{$this->getDescription()}',
            {$this->getPrice()},
            {$this->getStock()},
            {$this->getOffter()},
            {$this->getDate()},
            '{$this->getImage()}'
            );";

        $save=$this->db->query($insert);

        $result = false;
        if($save){
           $result=true;
        }
        return $result;
     
    }

    public function delete(){
        Utils::whoIs();
        $sql= "delete from products where id={$this->getId()};";
        $delete = $this->db->query($sql);

        $mensage= false;
        if($delete){
            $mensage=true;
        }
        return $mensage;

    }


}