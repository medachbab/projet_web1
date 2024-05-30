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
//require_once 'C:\xampp\htdocs\projet_web\classes\formation\controler\controler.php';
    //session_start();
    //echo "bonjour mr ".$_SESSION["nom"] . $_SESSION["prenom"];
    //echo $_SESSION["id_niveau"];
    //$mdobjcntr = new FormationContr();
    //$mdobjcntr->getAllmodulesByLevelID($_SESSION["id_niveau"]);
    ?>    
<div class="container2">
    <div class="Sidebar">
        <div class="Profile">
            <img class="Image" src="../uploads/images/users/<?php echo $_SESSION["photo"]?>" alt="profile"> 
                <div class="Nom"><?php echo  $_SESSION["nom"] . " " . $_SESSION["prenom"]?></div> 
        </div>
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

    </div>
    <div class="content">
    <?php require_once 'C:\xampp\htdocs\projet_web\includes\entete_inc.php';?> 
    <div class="container w-50 mt-5">
                <?php
                    if(isset($_SESSION["course_sent"])){
                        if($_SESSION["course_sent"] == 0){?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo "echec de l'envoie du cours reeseyer plus tard"?>
                            </div>

                        <?php } elseif($_SESSION["course_sent"] == 1){?>
                            <div class="alert alert-success" role="alert">
                            <?php echo "cours envoyée avec succé vous pouvez la voire dans le volet consulter mes cours"?>
                            </div>
                <?php }
                    unset($_SESSION["course_sent"]);
                }?>  

        <div class="card">
            <div class="card-header text-center bg-secondary text-light">
                <h2>entrer les informations du cours:</h2>
            </div>
            <div class="card-body">
            <form action="../includes/formHandler/formationProf.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                
                    <label for="module" class="form-label">module</label>
                    <select name="module" class="form-select" required>
                        <option value="">choisir le module</option>
                <?php

                use SebastianBergmann\CodeCoverage\Report\PHP;

                foreach($result as $key => $value){?>
                            <option value="<?php echo $value . "_" . $key;?>"><?php echo  $key?></option>
                <?php } ?>
                    </select>
                        </div><br>
                    <label for="title" class="form-label">titre du cours</label><br>
                    <input type="text" name="title" class="form-control" required><br>
                    <input type="file" name="file" class="form-control" required><br>
                    <input type="submit" name="submit" value="ajouter" class="btn btn-primary mt-3">  
                    
            </form>
                <?php // print_r($result);?>
            </div>
        </div>
    </div> 

        
    </div>
</div>
    
</body>
</html>


