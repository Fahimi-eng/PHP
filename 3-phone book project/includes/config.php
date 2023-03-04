<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "";
$database = "aaa";
try{
    $db = new PDO("mysql:host=$server;dbname=$database",$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    echo 'MYSQL Connected successfully';
}
catch(PDOException $e){
    echo $e->getMessage();
}