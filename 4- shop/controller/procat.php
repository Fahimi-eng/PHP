<?php
    require_once "controller/admin.php";
    //attach model here - for use models, you must edit config file in public/include directory
    require_once "model/Procat.php";
    $product_categories = new procat();

    //logic
    $directory = "admin"; // the views directory (default/admin)
    $view = ""; // view file name
    
    //actions
    switch ($action)
    {
        case 'index':
           $procats = $product_categories->all();
           //attach view
            require_once "./view/$directory/procat/index".".php";
            break;

        case 'create':
            $procats_chid_0 = $product_categories->get_procats_where_chid_0();
            require_once "./view/$directory/procat/create".".php";
            break;

        case 'store':
            if(isset($_POST))
            {
                $title = $_POST['title'];
                $chid = $_POST['chid'];
                $product_categories->insert($title , $chid);
                
                header('location:index.php?c=procat');
            }

        case 'destroy':
            if(isset($_POST))
            {
                $product_categories->delete($_POST['id']);
            }

            header('location:index.php?c=procat');
            break;

        case 'edit':
            if(isset($_POST))
            {
                $id = $_POST['id'];
                $procats_chid_0 = $product_categories->get_procats_where_chid_0();
                $procat = $product_categories->get($id);
                require_once "./view/$directory/procat/edit".".php";
            }
            break;

        case 'update':
           
            if(isset($_POST))
            {
                $title = $_POST['title'];
                $chid = $_POST['chid'];
                $id = $_POST['id'];
                $product_categories->update($id , $title , $chid);
                header('location:index.php?c=procat');
            }
            break;
        
        // add other cases for add new actions
    }


    
?>