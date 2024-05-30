<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container w-50 mt-5">
        <div class="card">
                    <div class="card-header text-center bg-secondary text-light">
                        <h1>Remplir ce formulaire:</h1>
                    </div>
                    <div class="card-body">               
                            <form action="./includes/formHandler/firstConnhandler.php" method="post">
                                <label for="mail_academique" class="form-label">votre e-mail academique:</label>
                                <input type="text" name="mail_academique" class="form-control" placeholder="entrer votre e-mail academique" required>
                                <label for="mail_personnel" class="form-label">votre e-mail personnel:</label>
                                <input type="text" name="mail_personnel" class="form-control" placeholder="entrer votre e-mail personnel:" required>
                                <!-- <label for="CNE" class="form-label">votre CNE</label>
                                <input type="text" name="CNE" class="form-control" placeholder="entrer votre CNE" required> -->
                                <label for="mdp" class="form-label">nouveaux mot de pass</label>
                                <input type="password" name="mdp" class="form-control" placeholder="entrer nouveaux mot de pass" required>
                                <label for="vmdp" class="form-label">rentrer le nouveaux mot de passe</label>
                                <input type="password" name="vmdp" class="form-control" placeholder="rentrer nouveaux mot de pass" required>
                                <input type="submit" name="submit" value="ajouter" class="btn btn-primary mt-3">
                            </form>
        </div>
    </div>
</body>
</html>