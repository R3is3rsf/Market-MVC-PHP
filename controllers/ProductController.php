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
            $stock=isset($_POST['stock']) ? intval($_POST['stock']) : false;
            $offter=isset($_POST['offter']) ? intval($_POST['offter']) : false;
            $date=isset($_POST['date']) ? $_POST['date'] : false;
            $categoryId=isset($_POST['category']) ? (int)$_POST['category'] : false;
            //Upload files
            $file = $_FILES['image'];
            $fileName= $file['name'];
            $minetype=$file['type'];  
 
            $error=array();
            
            if(empty($name) || is_numeric($name) || !preg_match("/[a-zA-Z]/",$name)){
                $error['name']="This name is not valid";
            }
            if(empty($description) || is_numeric($description) || !preg_match("/[a-zA-Z]/",$description)){
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
            if($minetype!=="image/jpg" && $minetype!=="image/jpeg" && $minetype!=="image/png" && $minetype!=="image/gif"){
                $error['image']="Image is not valid";
            }
 

            if(count($error)==0 && $categoryId && $name && $description && $price && $stock && $offter && $date){
                $products= new Product;
                $products->setCategoryId($categoryId);
                $products->setName($name);
                $products->setDescription($description);
                $products->setPrice($price);
                $products->setStock($stock);
                $products->setOffter($offter);
                $products->setDate($date);
                if(!is_dir('uploads/images')){
                    mkdir('uploads/images',0777,true);
                }
                move_uploaded_file($file['tmp_name'],'uploads/images/'.$fileName);
                
                $products->setImage($fileName);   
                $result = $products->save();
                                
                if($result){
                    $_SESSION['complete']="Register success";
                }
            }else{
                $_SESSION['error']=$error;
            }
               
            header('location:'.base_url.'product/create');
        }
    }

    public function delete($id){
        Utils::whoIs();
        $products=new Product;
        $products->setId($id);
        $delete = $products->delete();

        if($delete){
            $_SESSION['delete']='complete';
        }else{
            $_SESSION['delete']='Error';
        }

        header('Location:'.base_url.'product/management');
    }

    public function update($id){
        $productsObject = new Product;
        $productsObject->setId($id);
        $products= $productsObject->getById()->fetch_object();

        require_once 'views/product/update.php';
    }

    public function updateSave(){
        if(isset($_POST)){
            $id=isset($_POST['id']) ? intval($_POST['id']) : false;
            $name=isset($_POST['name']) ? $_POST['name'] : false;
            $description=isset($_POST['description']) ? $_POST['description'] : false;
            $price=isset($_POST['price']) ? floatval($_POST['price']) : false;
            $stock=isset($_POST['stock']) ? intval($_POST['stock']) : false;
            $offter=isset($_POST['offter']) ? intval($_POST['offter']) : false;
            $date=isset($_POST['date']) ? $_POST['date'] : false;
            $categoryId=isset($_POST['category']) ? (int)$_POST['category'] : false;
            //Upload files
            $file = isset($_FILES['image']) ? $_FILES['image'] : Utils::image($id);

            if(count($file)>=3){

                $fileName= $file['name'];
                $minetype=$file['type'];  
            }
 
            $error=array();
            
            if(empty($name) || is_numeric($name) || !preg_match("/[a-zA-Z]/",$name)){
                $error['name']="This name is not valid";
            }
            if(empty($description) || is_numeric($description) || !preg_match("/[a-zA-Z]/",$description)){
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
            if(isset($minetype) && $minetype!=="image/jpg" && $minetype!=="image/jpeg" && $minetype!=="image/png" && $minetype!=="image/gif"){
                $error['image']="Image is not valid";
            }
    

            if(count($error)==0 && $categoryId && $name && $description && $price && $stock && $offter && $date){
                $products= new Product;
                $products->setId($id);
                $products->setCategoryId($categoryId);
                $products->setName($name);
                $products->setDescription($description);
                $products->setPrice($price);
                $products->setStock($stock);
                $products->setOffter($offter);
                $products->setDate($date);
                if(!is_dir('uploads/images')){
                    mkdir('uploads/images',0777,true);
                }

                if(count($file)>=6){
                    move_uploaded_file($file['tmp_name'],'uploads/images/'.$fileName);
                    $products->setImage($fileName);   
                }else{
                    $products->setImage($file);
                }
                $result = $products->update();
                                
                if($result){
                    $_SESSION['complete']="Register success";
                }
            }else{
                $_SESSION['error']=$error;
            }
               
            header('location:'.base_url.'product/management');
        }
    }




}