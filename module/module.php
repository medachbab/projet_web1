<?php
require_once './conn.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ajouter Absence</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="mod_ab.php" method="post">
  <h1>choisissez un Module</h1>  
  <label for="module">Module:</label> 
  <?php
require_once './modulem.php';
  ?>
  
    <button type="submit" >Ajouter</button>
    
  </form>

</body>
</html>


  



