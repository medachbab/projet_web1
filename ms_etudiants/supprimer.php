<?php
if (isset($_GET["id"])){
    $id=$_GET["id"];
    require_once './conn.php';

    $sql="DELETE FROM etudiant2 WHERE id=$id";
    $conn->query($sql);
}
header("location: index.php");
exit;
?>