<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../static/css/bootstrap.css">
    <link rel="stylesheet" href="../../../static/css/studentpersonalpage.css">
    <script src="https://kit.fontawesome.com/b07671ddfe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../static/css/bootstrap.css">
    <link rel="stylesheet" href="../static/css/studentpersonalpage.css">
    <title>modules</title>
</head>
<body>
<?php
//require_once 'C:\xampp\htdocs\projet_web\includes\entete_inc.php';
//require_once 'C:\xampp\htdocs\projet_web\classes\formation\controler\controler.php';
    ?>    
<div class="container2">
    <div class="Sidebar">
        <div class="Profile">
            <img class="Image" src="../uploads/images/users/<?php echo $_SESSION["photo"]?>" alt="profile"> 
                <div class="Nom"><?php echo  $_SESSION["nom"] . " " . $_SESSION["prenom"]?></div> 
        </div>
        <div class="Services">
                <?php if($_SESSION["role"] == "admin"){?>
                    <ul>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="../importer_ex/">importer les utilisateurs</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-envelope"></i></div><a href="routing.php?controler=annonce&action=f13">ajouter une annonce par classse</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-regular fa-bell"></i></div><a href="routing.php?controler=annonce&action=f14">consulter mes annonces</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-lock"></i></div><a href="routing.php?controler=annonce&action=f19">mes annonces suprimées</a></li></div>                       
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-user"></i></div><a href="../ms_etudiants/">changer les informations des etudiants</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-marker"></i></div><a href="../abscence/">liste des abscences</a></li></div>
                    </ul>
                <?php }elseif($_SESSION["role"] == "prof"){?>

                    <ul>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-book"></i></div><a href="routing.php?controler=cours&action=f2">ajouter un cours</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-regular fa-bell"></i></div><a href="routing.php?controler=annonce&action=f5">ajouter un annonce</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-scroll"></i></div><a href="routing.php?controler=annonce&action=f7">consulter mes annonces</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-check"></i></div><a href="routing.php?controler=note&action=f1">noter mes etudiants</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-school"></i></div><a href="routing.php?controler=cours&action=f14">consulter mes cours</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-regular fa-bell"></i></div><a href="routing.php?controler=annonce&action=f17">annonces des niveaux</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-lock"></i></div><a href="routing.php?controler=cours&action=f16">consulter mes cours privés "suprimé"</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-marker"></i></div><a href="../module/">marquer l'abscence</a></li></div>
                    </ul> 
                <?php }?>
        </div>

    </div>
    <div class="content overflow-auto">
        <?php //require_once 'C:\xampp\htdocs\projet_web\includes\entete_inc.php';?> 
        <div class="container w-50 mt-5">
        
            <div class="card">
                <div class="card-header text-center bg-secondary text-light">
                    <h3>choisir le module</h3>
                </div>
                <div class="card-body">
                    <form action="../includes/formHandler/choix_niveau_handler.php" method="post">
                                            <select name="niveau" class="form-select" required>
                                            <option value="">choisire le niveau</option>
                                            <?php foreach($result as $key => $value){?>                                               
                                                <option value="<?php echo $value;?>"><?php echo  $key?></option>
                                            <?php } ?>
                                            </select>
                                            <input type="submit" name="submit" value="chercher" class="btn btn-primary mt-3">   
                    </form>
                    <?php //print_r($res);?>
                </div>
            </div>   
        </div>
        
    </div>
</div>
    
</body>
</html>
