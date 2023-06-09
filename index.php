<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';
if($_GET){
    
    $controllerName = !empty($_GET['controller']) ? ucfirst($_GET['controller']).'Controller':controller_default;
    $action = !empty($_GET['action']) ? $_GET['action']:action_default;
    $id = !empty($_GET['id']) ? intval($_GET['id']) : false;

    if(class_exists($controllerName)){

        $controllerObject = new $controllerName();
        if(method_exists($controllerObject,$action)){
            if($id){
                $controllerObject->$action($id);
            }else{
                $controllerObject->$action();
            }
        }else{
            $action= action_default;
            $controllerObject->$action();
        }
    }else{
        $error= new ErrorController();
        $error->index();
    }
}else{
    $controllerName=controller_default;
    $controllerObject= new $controllerName();
    $action= action_default;
    $controllerObject->$action();
}
require_once 'views/layout/footer.php';
