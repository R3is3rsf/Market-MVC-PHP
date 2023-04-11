<?php

class ProductController{

    public function index(){
        require_once 'views/product/featured.php';
    }

    public function management(){
        Utils::whoIs();
        require_once 'views/product/management.php';
    }


}