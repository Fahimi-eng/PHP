<?php

switch ($action)
{
    case 'index':
        echo 'index';
        break;

    case 'login':
        $email = $_POST['email'];
        $password = strtoupper(sha1($_POST['password']));

        require_once "method/users.php";
        $user_obj = new users();
        $user =$user_obj->login($email);
        if ($password == $user['password']){
            echo 'ok';
            $username = $user['firstname'] . ' ' . $user['lastname'];
            setcookie('username' , $username , time()+(86400*30));
            header('location:index.php?c=users&a=dashboard');
        }

    case 'dashboard':
        echo 'there is dashboard' . $_COOKIE['username'];

        break;
}