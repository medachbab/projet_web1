<?php
require_once "../../helpers/autoloader.php";
use classes\users\controler\LoginContraddpass;
session_start();
if(isset($_POST['submit'])){

    $academicmail = $_POST["mail_academique"];
    $personalmail = $_POST["mail_personnel"];
    $newpwd = $_POST["mdp"];
    $vnewpwd = $_POST["vmdp"];
    
    if($newpwd !== $vnewpwd){
        $_SESSION["pwd_saved"] =0;
        $_SESSION["pwd_msg"] = "mdps non identique"; 
        header("location: ../../firstConn.php");
    }else{
        //$_SESSION["newpwd"]= $newpwd;
        //require_once "../../classes/users/controler/login_contr_addpass_class.php";
        $userobj = new LoginContraddpass($academicmail,$personalmail,$newpwd);
        $userobj->insertPwdToNewUsercontr();
    }
}