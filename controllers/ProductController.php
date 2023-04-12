<?php
require_once 'models/Product.php';

class ProductController{

    public function index(){
        require_once 'views/product/featured.php';
    }

    public function management(){
        Utils::whoIs();
        $productsObject= new Product;
        $products= $productsObject->getAll()->fetch_all(MYSQLI_ASSOC);
        require_once 'views/product/management.php';
    }

    public function create(){
        require_once 'views/product/create.php';
    }

    public function save(){
        if(isset($_POST)){
            $name=isset($_POST['name']) ? $_POST['name'] : false;
            $description=isset($_POST['description']) ? $_POST['description'] : false;
            $price=isset($_POST['price']) ? floatval($_POST['price']) : false;
            $stock=isset($_POST['stock']) ? (int)$_POST['stock'] : false;
            $offter=isset($_POST['offter']) ? (int)$_POST['offter'] : false;
            $date=isset($_POST['date']) ? $_POST['date'] : false;
            $categoryId=isset($_POST['category']) ? (int)$_POST['category'] : false;
            $error=array();
            
            if(empty($name) || is_numeric($name) || preg_match("/0-9/",$name)){
                $error['name']="This name is not valid";
            }
            if(empty($description) || is_numeric($description) || preg_match("/0-9/",$description)){
                $error['description']="Description is not valid";
            }
            if(empty($price) || preg_match("/[A-Z]+[a-z]/",$price)){
                $error['price']="price is not valid";
            }
            if(empty($stock) || !is_numeric($stock)){
                $error['stock']="Stock is not valid";
            }
            if(empty($offter) || !is_numeric($offter)){
                $error['offter']="offter invalid";
            }
            if(empty($date)){
                $error['date']="Date empty";
            }
            if(empty($categoryId) || !is_numeric($categoryId)){
                $error['category']="category is invalid";
            }
            
            if(count($error)==0){
                $products= new Product;
                $products->setCategoryId($categoryId);
                $products->setName($name);
                $products->setDescription($description);
                $products->setPrice($price);
                $products->setStock($stock);
                $products->setOffter($offter);
                $products->setDate($date);
                $products->save();
            }
            header('location:'.base_url.'product/create');
        }
    }



}