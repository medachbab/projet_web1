<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Filiér</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<form action="module.php" method="post">
<!-- $postType=$_SESSION["userid"]; -->
  <h1>choisissez la filier </h1>  
  <label for="Filier">Filier:</label>
    <select id="Filier" name="Filier" required>
      <option value="">Sélectionner un Filier</option>
      <option value="1">TDIA1</option>
      <option value="4">TDIA2</option>
      <option value="7">TDIA3</option>

      <option value="2 ">ID1</option>
      <option value="5 ">ID2</option>
      <option value="8 ">ID3</option>

      <option value="3">GI1</option>
      <option value="6">GI2</option>
      <option value="9">GI3</option>

    </select>
    <button type="submit" >Envoi</button>
    
  </form>

</body>
</html>

