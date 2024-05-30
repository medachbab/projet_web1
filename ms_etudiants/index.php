<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>etudiants</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
        require_once './conn.php';
        $req = $conn->prepare('SELECT * FROM etudiant2');
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as &$row) {
            $row['hashed_pass'] = '********'; 
        }
        unset($row);
    
    ?>
    <div class="container my-5">
        <h2>Liste de etudiants </h2>
        <a class="btn btn-primary" href="create.php" role="button">ajouter etudiant</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                <th>id</th>
                <th>nom</th>
                <th>Prenom</th>
                <th>e_mail_personnel</th>
                <th>hashed_pass</th>
                <th>num_etudiant</th>
                <th>id_niveau</th>
                <th>id_filiere</th>
                <th>mail_etudiant</th>
                <th>photo</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $student) { ?>
                <tr>
                    <td><?= $student['id']; ?></td>
                    <td><?= $student['nom']; ?></td>
                    <td><?= $student['prenom']; ?></td>
                    <td><?= $student['e_mail_personnel']; ?></td>
                    <td><?= $student['hashed_pass']; ?></td>
                    <td><?= $student['num_etudiant']; ?></td>
                    <td><?= $student['id_niveau']; ?></td>
                    <td><?= $student['id_filiere']; ?></td>
                    <td><?= $student['mail_etudiant']; ?></td>
                    <td><?= $student['photo']; ?></td>
                    <td>  
                        <a class="btn btn-primary btn-sm" href="modifier.php?id=<?= $student['id']; ?>">modifier</a>
                        <a class="btn btn-danger btn-sm" href="supprimer.php?id=<?= $student['id']; ?>">suprimer</a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>

        </table>
    </div>
</body>
</html>