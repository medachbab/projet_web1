<?php
require_once './conn.php';

    $id="";
    $Nom = "";
    $prenom = "";
    $gmail = "";
   // $hashed_pass = "";
    $num_etudiant = "";
    $id_niveau = "";
    $id_filiere = "";
    $mail_etudiant = "";
    $errorMessage = "";
    $successMessage = "";

    if ($_SERVER['REQUEST_METHOD']=='GET'){

        if (!isset($_GET["id"])){
            header("location:index.php");
            exit;
        }
        $id=$_GET["id"];
        $sql = "SELECT * FROM etudiant2 WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            header("locatiob:index.php");
            exit;
        }
        $Nom = $row["nom"];
        $prenom = $row["prenom"];
        $gmail = $row["e_mail_personnel"];
       // $hashed_pass = $row["hashed_pass"];
        $num_etudiant = $row["num_etudiant"];
        $id_niveau = $row["id_niveau"];
        $id_filiere = $row["id_filiere"];
        $mail_etudiant = $row["mail_etudiant"];
    }else{
        $id=$_POST["id"];
        $Nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $gmail = $_POST["e_mail_personnel"];
       // $hashed_pass = $_POST["hashed_pass"];
        $num_etudiant = $_POST["num_etudiant"];
        $id_niveau = $_POST["id_niveau"];
        $id_filiere = $_POST["id_filiere"];
        $mail_etudiant = $_POST["mail_etudiant"];

        do{
            if ( empty($id) ||empty($Nom) || empty($prenom) || empty($gmail)  || empty($num_etudiant) || empty($id_niveau) || empty($id_filiere) || empty($mail_etudiant)) {
                $errorMessage = "All the fields are required";
                
                
            } 
            $sql = "UPDATE etudiant2 SET nom = ?, prenom = ?, e_mail_personnel = ?, num_etudiant = ?, id_niveau = ?, id_filiere = ?, mail_etudiant = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                $errorMessage = "Invalid query: " . $conn->error;
                break;
            }
            $stmt->execute([$Nom, $prenom, $gmail, $num_etudiant, $id_niveau, $id_filiere, $mail_etudiant, $id]);

            $successMessage = "Étudiant modifié avec succès!";
            header("location: index.php");
            exit;

        }while(false);

    }

?>