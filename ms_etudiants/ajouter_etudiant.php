<?php
    require_once './conn.php'; 
    $Nom = "";
    $prenom = "";
    $gmail = "";
    $hashed_pass = "";
    $num_etudiant = "";
    $id_niveau = "";
    $id_filiere = "";
    $mail_etudiant = "";
    $errorMessage = "";
    $successMessage = "";
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $Nom = $_POST["nom"];
      $prenom = $_POST["prenom"];
      $gmail = $_POST["e_mail_personnel"];
      //$hashed_pass = $_POST["hashed_pass"];
      $num_etudiant = $_POST["num_etudiant"];
      $id_niveau = $_POST["id_niveau"];
      $id_filiere = $_POST["id_filiere"];
      $mail_etudiant = $_POST["mail_etudiant"];

        do{
            if (empty($Nom) || empty($prenom) || empty($gmail) || empty($hashed_pass) || empty($num_etudiant) || empty($id_niveau) || empty($id_filiere) || empty($mail_etudiant)) {
                $errorMessage = "All the fields are required";
                
            
            } 

            $sql = "INSERT INTO etudiant2 (nom, prenom, e_mail_personnel, num_etudiant, id_niveau, id_filiere, mail_etudiant) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$Nom, $prenom, $gmail, $num_etudiant, $id_niveau, $id_filiere, $mail_etudiant]);
            
            if (!$stmt){
                //$errorMessage="Invalid query: ".$conn->error;
                break;
            }

                $Nom = "";
                $prenom = "";
                $gmail = "";
                ///$hashed_pass = "";
                $num_etudiant = "";
                $id_niveau = "";
                $id_filiere = "";
                $mail_etudiant = "";
            
                $successMessage = "Étudiant ajouté avec succès!";
                header("location: index.php");
                exit;
        }while (false) ;     

    }
?>