<?php
    $name = $email = '';
    $errors = [];
    
    function correct_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }
    //if($_POST[])
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if( ! empty($_POST['name'])){
            $name = correct_input($_POST['name']);
            //if paeen bar asas ebarat monazam dade shode , parametr dovvom ro barresi mikone ke aya sakhtar dorosti dare ya na / regex
            if(! preg_match("",$name)){
                array_push($errors , "Please enter the correct name.");
            }
        }
        else{
            array_push($errors , "The name is required.");
        }

        if(!empty($_POST['email'])){
            $email = correct_input($_POST['email']);
            if(! filter_var($email , FILTER_VALIDATE_EMAIL))
            {
                array_push($errors , "The email format is not valid.");
            }
        }
        else{
            array_push($errors , "The email is required.");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test php</title>
</head>
<style>
    body{
        background-color: #33ef93;
    }
    form{
        width: 180px;
        margin: 0 auto;
        border: 1px solid #333;
        padding: 10px 20px;
        border-radius: 5px;
        justify-content: center;
    }
    form>*{
        margin-bottom: 20px;
        margin-top: 10px;
    }
    input{
        display: block;
    }
    .errors{
        padding: 5px;
        color: red;
        background-color: #fff;
    }
</style>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
        <div>
            <?php
            
                foreach($errors as $error)
                {
                    echo "<p class=\"errors\">*".$error."</p>";
                }
            ?>
        </div>
        <label for="name">Enter your name:</label>
        <input type="text" name="name" placeholder="Name">
        <label for="email">Enter your email:</label>
        <input type="text" name="email" placeholder="email">
        <input type="submit">
    </form>
</body>
</html>