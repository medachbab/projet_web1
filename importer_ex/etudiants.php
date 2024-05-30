<?php
        include_once('conn.php');
        require 'vendor/autoload.php';

        use PhpOffice\PhpSpreadsheet\IOFactory;

        if(isset($_POST['import-excel'])){
            $file = $_FILES['excel-file']['tmp_name'];
            $extension = pathinfo($_FILES['excel-file']['name'], PATHINFO_EXTENSION);
            
            if($extension =='xlsx' || $extension == 'xls' || $extension == 'csv'){
                $obj = IOFactory::load($file);
                $data = $obj->getActiveSheet()->toArray();
                $successCount = 0;
                $errorCount = 0;
                
                foreach($data as $row){
                    $nom = $row['0'];
                    $prenom = $row['1'];
                    $e_mail_personnel = $row['2'];
                    $hashed_pass = $row['3'];
                    $num_etudiant = $row['4'];
                    $id_niveau = $row['5'];
                    $id_filiere = $row['6'];
                    


         
                    try {
                        $stmt = $conn->prepare("INSERT INTO etudiant2 (nom, prenom, e_mail_personnel, hashed_pass, num_etudiant,id_niveau,id_filiere) VALUES (:nom, :prenom, :e_mail_personnel, :hashed_pass, :num_etudiant, :id_niveau, :id_filiere)");
                        $stmt->bindParam(':nom', $nom);
                        $stmt->bindParam(':prenom', $prenom);
                        $stmt->bindParam(':e_mail_personnel', $e_mail_personnel);
                        $stmt->bindParam(':hashed_pass', $hashed_pass);
                        $stmt->bindParam(':num_etudiant', $num_etudiant);
                        $stmt->bindParam(':id_niveau', $id_niveau);
                        $stmt->bindParam(':id_filiere', $id_filiere);
           



                        if($stmt->execute()){
                            $successCount++;
                        } else {
                            $errorCount++;
                            echo "1";
                        }
                    } catch(PDOException $e) {
                        $errorCount++;
                        echo "2"; 
                        echo $e->getMessage();
                    }
                }

                $msg = "Imported $successCount records successfully. $errorCount records failed.";
            } else {
                $msg = "Invalid File Format! Please upload an Excel file.";
            }
        }
?>