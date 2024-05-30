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
                    
                    try {
                        $stmt = $conn->prepare("INSERT INTO admin_table (nom, prenom) VALUES (:nom, :prenom)");
                        $stmt->bindParam(':nom', $nom);
                        $stmt->bindParam(':prenom', $prenom);
                        
                        if($stmt->execute()){
                            $successCount++;
                        } else {
                            $errorCount++;
                        }
                    } catch(PDOException $e) {
                        $errorCount++;
                    }
                }

                $msg = "Imported $successCount records successfully. $errorCount records failed.";
            } else {
                $msg = "Invalid File Format! Please upload an Excel file.";
            }
        }
?>