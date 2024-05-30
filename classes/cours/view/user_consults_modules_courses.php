
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
                    <?php }?>
                    <?php if($_SESSION["role"] == "etudiant"){?>
                        <ul>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-envelope"></i></div><a href="routing.php?controler=cours&action=f1">consulter mes cours</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=annonce&action=f9">consulter les annonces de scolarité</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=annonce&action=f10">consulter les annonces de ma class</a></li></div>
                    </ul> 
                    <?php }?>  
        </div>

    </div>
    <div class="content overflow-auto">
    <?php require_once '../includes/entete_inc.php';?> 
    <div class="container w-75 mt-5">
        <div class="card">
    <?php 
        //header("Location: " . $_SERVER['REQUEST_URI']);
        if(isset($_SESSION["course_deleted"])){              
         if($_SESSION["course_deleted"] == 1){?>
            <div class="alert alert-success" role="alert">
                    cours suprimé avec succé!
            </div>
        <?php } elseif($_SESSION["course_deleted"] == 0){?>
            <div class="alert alert-danger" role="alert">
                    echec de la supression du cours!
            </div>
        <?php }
        unset($_SESSION["course_deleted"]);
    }
    if(isset($_SESSION["course_refreshed"])){              
        if($_SESSION["course_refreshed"] == 1){?>
           <div class="alert alert-success" role="alert">
                   cours suprimé avec succé!
           </div>
       <?php } elseif($_SESSION["course_refreshed"] == 0){?>
           <div class="alert alert-danger" role="alert">
                   echec de la supression du cours!
           </div>
       <?php }
       unset($_SESSION["course_refreshed"]);
   }
        
        //il faut suprimer cette session aprés l'utiliser?>
            <div class="card-header text-center bg-secondary text-light">
            <h2>liste des cours:</h2>
            </div>
            <div class="card-body">
            
                <?php 
                /*echo "<pre>";
                print_r($files);
                echo "</pre>";*/
                if(empty($result)){?>
                    <div class="alert alert-warning" role="alert">
                        aucun cours n'est publié pour le moment!
                    </div>

                <?php }else{?>
                    <table class="table table-striped"> 
                    <thead>
                        <tr>
                            <th class="col-8">titre du cours</th> 
                            <th class="col-2">telecharger</th>
                            <?php if($_SESSION["role"] == "prof"){?>
                                <th class="col-2 text-end">suprimer</th>
                            <?php }?> 
                        </tr>
                    </thead>
                    <tbody>
                <?php        
                    foreach($result as $course){
                        //echo $key;
                        //print_r($file) ;
                        $f=explode("_", $course["nom_cour"]);
                        $tmp = end($f);
                        $tmp2=explode(".", $tmp);
                        $coursename = $tmp2[0];                
                        ?>
                        <tr>             
                            <td><?php echo $coursename; ?> </td>  
                            <td colspan="2">
                                <a href="../uploads/cours/<?php  echo $course["nom_cour"]?>" download class="btn btn-success">telecharger</a>
                            </td>    
                            <?php if($_SESSION["role"] == "prof"){
                                if($course["cours_suprimer"] == 0){
                                ?>
                                
                                <td colspan="2">
                                    <a href="routing.php?controler=cours&action=f15&courseid=<?php echo $course["id_cour"]?>" onclick="return confirm('etes vous sure de suprimer ce cours?')" class="btn btn-danger">suprimer</a>
                                </td>
                            <?php }elseif($course["cours_suprimer"] ==1){?>
                                <td colspan="2">
                                <a href="routing.php?controler=cours&action=f18&courseid=<?php echo $course["id_cour"]?>" onclick="return confirm('etes vous sure de suprimer ce cours?')" class="btn btn-danger">republier</a>
                                </td>
                            <?php }}?>
                             
                            
                        </tr>
                        <?php
                    }                
                } ?>
            </tbody>
        </table> 
            </div>
        </div>
    </div>
    

    
</body>
        
    </div>
</div>
    
</body>
</html>