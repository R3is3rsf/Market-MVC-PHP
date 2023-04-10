<?php
require_once 'models/Category.php';
class CategoryController{

    public function index(){
        $categories = new Category;
        $allCategories = $categories->getAll()->fetch_all();
        require_once 'views/category/index.php';
    }

    public function create(){
        require_once 'views/category/create.php';

    }

    public function save(){
        if(isset($_POST)){
            $name = isset($_POST['name']) ? $_POST['name'] : false;
            $error=[];
            if(empty($name) || is_numeric($name) || preg_match("/[0-9]/",$name)){
                $error['name']="Name  $name is not valid";
            }
            if(count($error)==0){
                $categoria= new Category;
                $categoria->setName($name);
                $save =  $categoria->save();
            }
        }
        header('location:'.base_url.'category/index');
    }

}