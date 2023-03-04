<?php
require_once 'includes/config.php';
require_once 'method/migration.php';
if ($database){
    echo "<br>Connect to Database : Yes";
    echo "<br>Database : $database";
    header('location:login.php');
}
$migrate = new migration();

if(isset($_POST['submit'])){
    $dbname = $_POST['dbname'];
    if($migrate->create_database($dbname)){
        $migrate->create_table($dbname);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Phone Book | Migration</title>
</head>
<body class="bg-light">
    <div class="container bg-light w-50 text-center shadow border mt-3 p-2">
        <h3>
            Create DataBase
        </h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, eius.
        </p>
        <form method="post">
            <label for="">DataBase Name:</label>
            <input type="text" name="dbname" placeholder="Enter your db name">
            <input type="submit" value="Create" name="submit" class="btn btn-primary">
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>