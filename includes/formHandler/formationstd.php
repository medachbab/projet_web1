<?php
session_start();
if(isset($_POST['submit'])){
    $id_module = $_POST["module"];
    $_SESSION["id_module"] = $id_module;
    if(isset($_SESSION["required_view"])){
        if($_SESSION["required_view"]=="annonces"){
            header("location: ../../routing/routing.php?controler=cours&action=f8"); 
        }elseif($_SESSION["required_view"]=="cours")
            header("location: ../../routing/routing.php?controler=cours&action=f4");
    }
}