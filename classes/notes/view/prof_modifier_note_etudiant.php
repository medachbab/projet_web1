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
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-check"></i></div><a href="routing.php?controler=note&action=f1">noter mes etudiants</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-school"></i></div><a href="routing.php?controler=cours&action=f14">consulter mes cours</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-regular fa-bell"></i></div><a href="routing.php?controler=annonce&action=f17">annonces des niveaux</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-lock"></i></div><a href="routing.php?controler=cours&action=f16">consulter mes cours privés "suprimé"</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-marker"></i></div><a href="../module/">marquer l'abscence</a></li></div>
            </ul>
        </div>

    </div>
    <div class="content overflow-auto">
    <?php //require_once 'C:\xampp\htdocs\projet_web\includes\entete_inc.php';?> 
        <div class="container w-70 mt-5">
        <?php
                    if(isset($_SESSION["grades_seted"])){
                        if($_SESSION["grades_seted"] == 0){?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo "echec de la registre des notes!!veuillez";
                                echo $_SESSION["msgerr"] ?>
                                
                            </div>

                        <?php } elseif($_SESSION["grades_seted"] == 1){?>
                            <div class="alert alert-success" role="alert">
                            <?php echo "notes enregistrées avec succé"?>
                            </div>
                <?php }
                    unset($_SESSION["grades_seted"], $_SESSION["msgerr"]);
                }?>
            <div class="card">
                <div class="card-header text-center bg-secondary text-light">
                <form action="../includes/formHandler/justifieNotes_formhandler.php" method="post">
                <h2>liste des etudiants: <input class="form-control col-1" type="number" name="nb_students" value="<?php echo count($students)?>" disabled></h2>
                </div>
                <div class="card-body">
                
                    <?php 
                    /*echo "<pre>";
                    print_r($files);
                    echo "</pre>";*/
                    if(empty($students)){?>
                        <div class="alert alert-warning" role="alert">
                            vous n'avez pas encors entrer les notes veuiler consulter le volet noter etudiant!
                        </div>

                    <?php }else{?>
                        <table class="table table-striped"> 
                        <thead>
                            <tr>
                                <th>photo</th> 
                                <th>nom</th>
                                <th>prenom</th>
                                <!-- <th>note1</th> -->
                                <th>note1<input type="text" name="p1" class="form-control" value="<?php echo $students[0]["pourcentage1"]?>" required></th>
                                <th>note2<input type="text" name="p2" class="form-control" value="<?php echo $students[0]["pourcentage2"]?>" required></th>
                                <th>note3<input type="text" name="p3" class="form-control" value="<?php echo $students[0]["pourcentage3"]?>" required></th> 
                                <th>moyenne</th>
                                <th>V/R</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <?php     
                                $_SESSION["stds"] = $students;   
                                foreach($students as $student){               
                                    ?>
                                    <tr>             
                                        <td><img src="../uploads/images/users/<?php echo $student["photo"]?>" alt="profile etudiant" style="width:75px;hight:75px;border-radius:50%"></td>  
                                        <td><?php echo $student["nom"]?></td>
                                        <td><?php echo $student["prenom"]?></td>
                                        <td><input type="text" name="<?php echo $student["id"]. "_n1"?>" class="form-control" value="<?php echo $student["note1"]?>" required></td>
                                        <td><input type="text" name="<?php echo $student["id"]. "_n2"?>" class="form-control" value="<?php echo $student["note2"]?>" required></td>
                                        <td><input type="text" name="<?php echo $student["id"]. "_n3"?>" class="form-control" value="<?php echo $student["note3"]?>" required></td>
                                        <td><input type="text" name="" class="form-control" value="<?php echo $student["moyenne"]?>" disabled></td>
                                        <td><input type="text" name="" class="form-control" value="<?php if($student["valider"] == 1) echo "V"; elseif($student["valider"] == 0) echo "R"; else echo "";?>" disabled></td>                    
                                    </tr>
                                    <?php
                                }                
                            } ?>
                        </tbody>
                        <input type="submit" name="submit" value="enregistrer les notes" class="btn btn-primary">
                    </form>
                       
            </table> 
                </div>
            </div>
        </div>
        </div>
            
        </div>
</div>
    
</body>
</html>