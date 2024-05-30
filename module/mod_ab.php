
 <?php
require_once './etudiant.php';
require_once './conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liste des Absences</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style1.css">

</head>
<body>
  <div class="jumbotron text-center">
    <h1>Liste Absences</h1>
  </div>
  <div class="container">
    <form method="post">
    <div>
        <input type="submit" name="absences" value="Marquer Absences" class="btn btn-success">
        <input  type="submit" id="a" name="absences_sp" value="supreme Absences" class="btn btn-danger">

      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Numéro Étudiant</th>
            <th>id_niveau</th>
            <th>Absences</th>
            <th>Num_Total_Abc</th>
            <th>date_absences</th>
          </tr>
        </thead>
        <tbody> 
          <?php if (!empty($result)) { ?>
            <?php foreach ($result as $student) { ?>
            <tr>
              <td><?=$student['id_ab'];?></td>
              <td><?=$student['nom'];?></td>
              <td><?=$student['prenom'];?></td>
              <td><?=$student['gmail'];?></td>
              <td><?=$student['num_etudiant'];?></td>
              <td><?=$student['id_niveau'];?></td>
              <td><input type="checkbox" name="absence[<?=$student['id_ab'];?>]" value="1"></td>
              <td><?=$student['Num_Total_Abc'];?></td>
              <td><?=$student['date_absences'];?></td>
            </tr>
          <?php } ?>
        <?php } ?>
        </tbody>
      </table>
    </form>
    <?php if(isset($msg)) { ?>
        <div class="alert alert-success"><?=$msg;?></div>
    <?php } ?>
    <?php if(isset($error)) { ?>
        <!-- <div class="alert alert-danger"><?=$error;?></div> -->
    <?php } ?>
  </div>
</body>
</html>
