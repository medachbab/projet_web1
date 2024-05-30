<?php
require_once "../../helpers/autoloader.php";
Autoloader::register();
use classes\users\controler\LoginContr;
if(isset($_POST["submit"])){
    //session_start();
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    
    //require_once "../../classes/users/controler/login_contr_class.php";   
    $login = new LoginContr($username, $pass);
    $login->getuserByEmail_contr();
}