<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Phone Book | Login</title>
</head>
<body class="bg-light">
<div class="container bg-light w-50 text-center shadow border mt-3 p-2">
    <h3>
        Login to Account
    </h3>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, eius.
    </p>
    <form method="post" action="index.php?c=users&a=login">
        <label for="">Fill the fields</label>
        <br>
        <input class="my-2" type="email" name="email" placeholder="Enter your email address..." required>
        <br>
        <input type="password" name="password" placeholder="Enter your account password..." required>
        <br>
        <input type="submit" value="Login" name="submit" class="btn btn-primary my-2">
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
