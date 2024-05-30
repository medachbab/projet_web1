<?php
session_start();
if(isset($_POST['submit'])){
        $id_niveau = $_POST["niveau"];
        $_SESSION["id_niveau"] = $id_niveau;
        if($_SESSION["role"] == "admin"){
            if (isset($_SESSION["required_view"])){
                unset($_SESSION["required_view"]);
            }
            if($_SESSION["fonction"] == "annonces"){
                header("location: ../../routing/routing.php?controler=annonce&action=f15");             
            }elseif($_SESSION["fonction"] == "annonces_suprimer"){
                header("location: ../../routing/routing.php?controler=annonce&action=f20"); 
            }
            
            
        }elseif($_SESSION["role"] == "prof"){
            header("location: ../../routing/routing.php?controler=annonce&action=f18");
        }
         

}