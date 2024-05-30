<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/test.css">
    <title>Document</title>
</head>
<body>
        <div class="containerr">
            <div class="image"></div>
            <div class="form">
                <form action="./includes/formHandler/login_inc.php" method="post">
                    <h2>platefome e-service</h2>
                    <label for="username" class="form-label">nom d'utilisateur:</label><br>
                    <input type="text" class="input" name="username" placeholder="entrer votre nom d'utilisateur" required>
                    <label for="pass" class="form-label">mot de pass:</label><br>
                    <input type="password" name="pass" placeholder="entrer votre mot de pass" class="input" required>
                    <br>
                    <button type="submit" name="submit" value="se connecter" class="input button">se connecter</button>

                    <hr>
                    <a href="./firstConn.php">ce connecter pour la premiere fois?</a>
                    <a href="#">question?</a>
                </form>
            </div>
        </div>
    
    
</body>
</html>