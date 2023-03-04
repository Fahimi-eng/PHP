<?php
require_once "includes/config.php";
$controller = (!empty($_GET['c']) ? $_GET['c'] : 'index');
$action = (!empty($_GET['a']) ? $_GET['a'] : 'index');

require_once "controller/$controller.php";
if($controller){
    require_once "view/$controller/$action.php";
}