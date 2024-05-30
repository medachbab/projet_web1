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
    <title>ajouter un annonce</title>
</head>
<body>
<?php
//require_once 'C:\xampp\htdocs\projet_web\includes\entete_inc.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
    ?>    
<div class="container2">
    <div class="Sidebar">
        <div class="Profile">
            <img class="Image" src="../uploads/images/users/<?php echo $_SESSION["photo"]?>" alt="profile"> 
                <div class="Nom"><?php echo  $_SESSION["nom"] . " " . $_SESSION["prenom"]?></div> 
        </div>
        <?php if($_SESSION["role"] == "prof"){?>
        <div class="Services">
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
        </div>
        <?php }elseif($_SESSION["role"] == "admin"){?>
            <div class="Services">
            <ul>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="../importer_ex/">importer les utilisateurs</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-book"></i></div><a href="routing.php?controler=annonce&action=f13">ajouter une annonce par classse</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-regular fa-bell"></i></div><a href="routing.php?controler=annonce&action=f14">consulter mes annonces</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=annonce&action=f19">mes annonces suprimées</a></li></div>                       
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="../ms_etudiants/">changer les informations des etudiants</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="../abscence/">liste des abscences</a></li></div>
                    </ul>
        </div>
        <?php }?> 
    </div>
    <div class="content overflow-auto">
        <?php require_once 'C:\xampp\htdocs\projet_web\includes\entete_inc.php';
        
            
        ?> 
        <div class="container w-50 mt-5">
        <?php
        if(isset($_SESSION["announcement_sent"])){
            if($_SESSION["announcement_sent"] == 0){?>
                <div class="alert alert-danger" role="alert">
                    <?php echo "echec de l'envoie de l'annonce reeseyer plus tard"?>
                </div>

            <?php } elseif($_SESSION["announcement_sent"] == 1){?>
                <div class="alert alert-success" role="alert">
                <?php echo "annonce envoyée avec succé vous pouvez la voire dans le volet consulter mes annonces"?>
                </div>
            <?php }
            unset($_SESSION["announcement_sent"]);
        }
        ?> 
        <div class="card">
            <div class="card-header text-center bg-secondary text-light">
                <h1>entrer les infos de l'annonce</h1>
            </div>
            <div class="card-body">
                <?php if($_SESSION["role"] == "prof"){ ?>                
                    <form action="../includes/formHandler/add_announcement_handler.php" method="post" enctype="multipart/form-data">
                        <label for="module" class="form-label">module</label>
                        <select name="module" class="form-select" required>
                            <option value="">choisir le module</option>
                            <?php
                                //use SebastianBergmann\CodeCoverage\Report\PHP;
                                foreach($result as $key => $value){?>
                                <option value="<?php echo $value;?>"><?php echo  $key?></option>
                            <?php } ?>
                        </select>
                        <label for="object" class="form-label">objet</label><br>
                        <input type="text" name="object" class="form-control" placeholder="entrer l'objet de l'annonce" required><br>
                        <label for="contenu_text" class="form-label">votremessage:</label>
                        <textarea name="contenu_text" class="form-control" placeholder="un message pour exprimer le contenu de l'annonce (dates/deadlines...)"></textarea>
                        <label for="file" class="form-label">voulez vous passe un conenus multimedia?</label>
                        <input type="file" name="file" class="form-control">
                        <input type="submit" name="submit" value="ajouter" class="btn btn-primary mt-3">
                    </form>
                <?php }elseif ($_SESSION["role"]=="admin") {?>                
                    <form action="../includes/formHandler/add_announcement_handler.php" method="post" enctype="multipart/form-data">
                        <label for="classe" class="form-label">classe</label>
                        <select name="classe" class="form-select" <?php if(isset($_GET["errmessage"])){?> value=""<?php }?>required>
                            <option value="">choisir la classe</option>
                            <?php
                                //use SebastianBergmann\CodeCoverage\Report\PHP;
                                foreach($result as $key => $value){?>
                                <option value="<?php echo $value;?>"><?php echo  $key?></option>
                            <?php } ?>
                        </select>
                        <h5>selectionner les destinataires</h5>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="etudiants" name="destinataires[]" value="etudiants">
                            <label class="form-check-label" for="etudiants">etudiants</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="profs" name="destinataires[]" value="profs">
                            <label class="form-check-label" for="profs">profs</label>
                        </div>
                        <label for="object" class="form-label">objet</label><br>
                        <input type="text" name="object" class="form-control" <?php if(isset($_GET["errmessage"])){?> value="hijd"<?php }?> required><br>
                        <label for="contenu_text" class="form-label" >votre message:</label>
                        <textarea name="contenu_text" class="form-control" <?php if(isset($_GET["errmessage"])){?> value="dgdeghj"<?php }?>></textarea>
                        <label for="file" class="form-label">voulez vous passer un contenus multimedia?</label>
                        <input type="file" name="file" class="form-control">
                        <input type="submit" name="submit" value="ajouter" class="btn btn-primary mt-3">
                    </form>
                <?php }?>
            </div>
        </div>
        
    </div>
        
    </div>
</div>
    
</body>
</html>

