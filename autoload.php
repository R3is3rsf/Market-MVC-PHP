<?php



spl_autoload_register(function ($classname) {

if (file_exists("controllers/".$classname.".php")) {
    include_once("controllers/".$classname.".php");
}

});