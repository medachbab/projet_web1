<?php
session_start();
if(isset($_POST['submit'])){
    if($_SESSION["prof-consulter"]== "cours"){
        $id_module = $_POST["module"];
        $_SESSION["id_module"] = $id_module;
        unset($_SESSION["prof-consulter"]);
        header("location: ../../routing/routing.php?controler=cours&action=f4"); 
    }elseif($_SESSION["prof-consulter"]== "cours_suprimer"){
        $id_module = $_POST["module"];
        $_SESSION["id_module"] = $id_module;
        unset($_SESSION["prof-consulter"]);
        header("location: ../../routing/routing.php?controler=cours&action=f17");
    }

    elseif($_SESSION["prof-consulter"]== "annonces"){
        $id_module = $_POST["module"];
        $_SESSION["id_module"] = $id_module;
        unset($_SESSION["prof-consulter"]);
        header("location: ../../routing/routing.php?controler=annonce&action=f8");
    }elseif($_SESSION["prof-noter"]== "etudiants"){
        $id_module = $_POST["module"];
        $_SESSION["id_module"] = $id_module;
        unset($_SESSION["prof-noter"]);
        header("location: ../../routing/routing.php?controler=note&action=f2");
    }elseif($_SESSION["etudiant-consulter"]== "annonces"){
        $id_module = $_POST["module"];
        $_SESSION["id_module"] = $id_module;
        unset($_SESSION["etudiant-consulter"]);
        header("location: ../../routing/routing.php?controler=annonce&action=f8");
    }elseif($_SESSION["prof-modifier-note"]== "etudiants"){
        $id_module = $_POST["module"];
        $_SESSION["id_module"] = $id_module;
        unset($_SESSION["prof-modifier-note"]);
        header("location: ../../routing/routing.php?controler=note&action=f4");
    }
    
}