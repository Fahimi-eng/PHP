<?php
    require_once "public/include/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>
    <?php
        $controller = @$_GET['c']?$_GET['c']:'home';
        $action = @$_GET['a']?$_GET['a']:'index';
        if(file_exists("controller/$controller".".php")){
            require_once "controller/$controller".".php";
        }
    ?>
</body>
</html>