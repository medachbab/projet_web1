<?php

$bd = "baseetudiant";
$dr = "mysql:host=localhost;dbname=$bd";
$root = "root";
$paswrd = "";

try {
    $conn = new PDO($dr, $root, $paswrd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>