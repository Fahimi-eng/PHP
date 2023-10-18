<?php
    //attach model here - for use models, you must edit config file in public/include directory
    // require_once "./model/User.php";


    //logic
    $directory = "default"; // the views directory (default/admin)
    $view = ""; // view file name

    //actions
    switch ($action)
    {
        case 'index':
            $view = "index";
            break;
        
        // add other cases for add new actions
    }


    //attach view
    require_once "./view/$directory/$view".".php";
?>