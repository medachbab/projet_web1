<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=à, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <?php
        //require_once 'C:\xampp\htdocs\projet_web\includes\entete_inc.php';
    ?>
    <div class="container w-50">
        <div class="card">
            <div class="card-header text-center bg-secondary text-light"><h2>espace d'authentification:</h2></div>
            <div class="card-body">
                    <form action="./includes/formHandler/login_inc.php" method="post">
                            <label for="username" class="form-label">nom d'utilisateur:</label>
                            <input type="text" class="form-control" name="username" placeholder="entrer votre nom d'utilisateur" required>
                            <label for="pass">mot de pass:</label>
                            <input type="password" name="pass" placeholder="entrer votre mot de pass" class="form-control" required>
                            <input type="submit" name="submit" value="se connecter" class="btn btn-primary mt-3">   
                    </form>  
                    <a href="./firstConn.php">ce connecter pour la premiere fois?</a> 
                </div>
            </div>
        </div>
    </div>
    
    
    
</body>
</html>