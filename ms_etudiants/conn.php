<?php

$bd = "id22241174_baseetudiant";
$dr = "mysql:host=localhost;dbname=$bd";
$root = "id22241174_projet";
$paswrd = "MoH@@0102";

try {
    $conn = new PDO($dr, $root, $paswrd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>