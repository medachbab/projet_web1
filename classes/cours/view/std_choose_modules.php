

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
        <ul>
                        <div class="Comp"><li><div class="icon"><i class="fa-solid fa-envelope"></i></div><a href="routing.php?controler=cours&action=f1">consulter mes cours</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=annonce&action=f9">consulter les annonces de scolarité</a></li></div>
                        <div class="Comp"><li><div class="icon"><i class="fa-brands fa-github"></i></div><a href="routing.php?controler=annonce&action=f10">consulter les annonces de ma class</a></li></div>
                    </ul> 
        </div>
        

    </div>
    <div class="content overflow-auto">
        <?php require_once 'C:\xampp\htdocs\projet_web\includes\entete_inc.php';?> 
        <div class="container w-50 mt-5">
            <div class="card">
                <div class="card-header text-center bg-secondary text-light">
                    <h3>cours:</h3>
                </div>
                <div class="card-body">
                    <form action="../includes/formHandler/formationstd.php" method="post">
                                            <select name="module" class="form-select" required>
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



