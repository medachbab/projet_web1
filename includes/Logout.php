<?php
namespace includes;
class LogOut{
 public static function Logout(){
    ob_start();
    session_start();
    ob_end_flush();
    session_unset();
    session_destroy();
    header("location: ../../index.php");
    exit();
 }
}
    