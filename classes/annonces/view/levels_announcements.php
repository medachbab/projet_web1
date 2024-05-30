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
    <title>Document</title>
</head>
<body>
<?php
//require_once 'C:\xampp\htdocs\projet_web\includes\entete_inc.php';

    ?>    
<div class="container2">
    <div class="Sidebar">
        <div class="Profile">
            <img class="Image" src="../uploads/images/users/<?php echo $_SESSION["photo"]?>" alt="profile"> 
                <div class="Nom"><?php echo  $_SESSION["nom"] . " " . $_SESSION["prenom"]?></div> 
        </div>
        
        <div class="Services">
        <?php if($_SESSION["role"] == "prof"){?>
            <ul>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-book"></i></div><a href="routing.php?controler=cours&action=f2">ajouter un cours</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-regular fa-bell"></i></div><a href="routing.php?controler=annonce&action=f5">ajouter un annonce</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-scroll"></i></div><a href="routing.php?controler=annonce&action=f7">consulter mes annonces</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=note&action=f1">noter les etudiants</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=cours&action=f14">consulter mes cours</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=annonce&action=f17">annonces des niveaux</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=note&action=f3">modifier notes des etudiants</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=cours&action=f16">consulter mes cours privés</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="../module/">marquer l'abscence</a></li></div>
                    </ul>
                    <?php }elseif($_SESSION["role"] == "etudiant"){?>
                        <ul>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-envelope"></i></div><a href="routing.php?controler=cours&action=f1">consulter mes cours</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=annonce&action=f9">consulter les annonces de scolarité</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=annonce&action=f10">consulter les annonces de ma class</a></li></div>
                    </ul> 
                    <?php }elseif($_SESSION["role"] == "admin"){?>
                        <ul>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="../importer_ex/">importer les utilisateurs</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-book"></i></div><a href="routing.php?controler=annonce&action=f13">ajouter une annonce par classse</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-regular fa-bell"></i></div><a href="routing.php?controler=annonce&action=f14">consulter mes annonces</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=annonce&action=f19">mes annonces suprimées</a></li></div>                       
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="../ms_etudiants/">changer les informations des etudiants</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="../abscence/">liste des abscences</a></li></div>
                    </ul>
                    <?php }?> 
        </div>

    </div>
    <div class="content overflow-auto">
    <?php require_once 'C:\xampp\htdocs\projet_web\includes\entete_inc.php';?> 
    <div class="container w-50 mt-3">
    <?php 
            if(isset($_SESSION["announcement_deleted"])){              
                if($_SESSION["announcement_deleted"] == 1){?>
                    <div class="alert alert-success" role="alert">
                        annonce suprimé avec succé!
                    </div>
                                    
                <?php }elseif($_SESSION["announcement_deleted"] == 0){?>
                                <div class="alert alert-danger" role="alert">
                                    echec de la supression de l'annonce!
                                </div>
                            
                <?php }
                unset($_SESSION["announcement_deleted"]);
            }
            if(isset($_SESSION["announcement_refreshed"])){              
                if($_SESSION["announcement_refreshed"] == 1){?>
                    <div class="alert alert-success" role="alert">
                        annonce refrechée avec succé!
                    </div>
                                    
                <?php }elseif($_SESSION["announcement_refreshed"] == 0){?>
                                <div class="alert alert-danger" role="alert">
                                    echec du retour de l'annonce!
                                </div>
                            
                <?php }
                unset($_SESSION["announcement_refreshed"]);
            } ?>
        <div class="card">
            <div class="card-header text-center bg-secondary text-light">
                <h2>liste des annonces du module:</h2>
                
        </div>    
            <div class="card-body">
                <?php 
                    if(empty($result)){?>
                        <div class="alert alert-warning" role="alert">
                            aucun annonce n'est publié pour le moment!
                        </div>
    
                    <?php }else{
                    foreach($result as $announcement){                
                        ?> 
                        <!-- <div class="container"> -->
                            <div class="card mt-2">
                                <div class="card-header bg-secondary text-center">
                                    <h2>publiée par:<?php echo $announcement["nom"] . " " . $announcement["prenom"] ?> </h2>
                                </div>
                                <div class="card-body">
                                    <p> <strong>date de publication:</strong> <?php echo $announcement["date_heure_auto"] ?> </p><br>
                                    <p> <strong>objet:</strong> <?php echo $announcement["objet"] ?> </p><br>
                                    <p> <strong>descriptif:</strong> <?php echo $announcement["contenu_text"] ?> </p><br>
                                    <a href="../uploads/annonces/<?php  echo $announcement["contenu_multimedia"]?>" download class="btn btn-success">telecharger le fichier pour plus de details</a>
                                    <?php if($_SESSION["role"] == "admin"){
                                        if($announcement["annonce_suprimer"]==0){?>
                                    <a href="routing.php?controler=annonce&action=f16&announcementid=<?php echo $announcement["id_annonce"]?>" onclick="return confirm('etes vous sure de suprimer cette annonce?')" class="btn btn-danger">suprimer l'annonce</a>
                                    <?php }elseif($announcement["annonce_suprimer"]==1){?>
                                        <a href="routing.php?controler=annonce&action=f21&announcementid=<?php echo $announcement["id_annonce"]?>" onclick="return confirm('etes vous sure de republier cette annonce suprimée?')" class="btn btn-primary">repulier l'annonce</a>
                                    <?php }}?>
                                </div>
                            </div>
                        <!-- </div> -->
                
                <?php }} ?>
            </div>
        </div>        
    </div>
        
    </div>
</div>
    
</body>
</html>