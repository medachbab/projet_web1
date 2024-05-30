<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../static/css/bootstrap.css">
    <link rel="stylesheet" href="../../../static/css/studentpersonalpage.css">
    <script src="https://kit.fontawesome.com/b07671ddfe.js" crossorigin="anonymous"></script>
    <title>personnalpage</title>
</head>
<body>
<?php
    //require_once 'C:\xampp\htdocs\projet_web\includes\entete_inc.php';
    //require_once 'C:\xampp\htdocs\projet_web\classes\formation\controler\controler.php';
    session_start();
?>    
<div class="container2">
    <div class="Sidebar">
        <div class="Profile">
            <img class="Image" src="../../../uploads/images/users/<?php echo $_SESSION["photo"]?>" alt="profile"> 
                <div class="Nom"><?php echo  $_SESSION["nom"] . " " . $_SESSION["prenom"]?></div> 
        </div>
        <div class="Services">
                    <ul>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="../../../importer_ex/">importer les utilisateurs</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-book"></i></div><a href="../../../routing/routing.php?controler=annonce&action=f13">ajouter une annonce par classse</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-regular fa-bell"></i></div><a href="../../../routing/routing.php?controler=annonce&action=f14">consulter mes annonces</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="../../../routing/routing.php?controler=annonce&action=f19">mes annonces suprimées</a></li></div>                       
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="../../../ms_etudiants/">changer les informations des etudiants</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="../../../abscence/">liste des abscences</a></li></div>
                    </ul> 
        </div>

    </div>
    <div class="content">
    <?php require_once 'C:\xampp\htdocs\projet_web\includes\entete_inc.php';?> 
        <!--div class="container w-50">
        <div class="card ">
            <div class="card-header"><h2>hi there</h2></div>
            <div class="card-body"><p>it's a test if the bootstrap can work with this css</p></div>
        </div>
        </div-->
        
    </div>
</div>
    
</body>
</html>