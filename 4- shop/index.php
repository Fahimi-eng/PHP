<?php
    require_once "public/include/config.php";

    $controller = @$_GET['c']?$_GET['c']:'home';
    $action = @$_GET['a']?$_GET['a']:'index';
    
    if(file_exists("controller/$controller".".php")){
        require_once "controller/$controller".".php";
    }
    ?>