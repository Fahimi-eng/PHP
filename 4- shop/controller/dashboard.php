<?php
    require_once "controller/admin.php";
    //attach model here - for use models, you must edit config file in public/include directory
 
    $directory = "admin"; // the views directory (default/admin)
    $view = ""; // name of view

    //actions
    switch ($action)
    {
        case 'index':
            $view = "dashboard";
            //attach view
            require_once "./view/$directory/$view".".php";
            break;

        case 'login':
            var_dump($_POST);
            break;
        
        // add other cases for add new actions
    }


    
?>