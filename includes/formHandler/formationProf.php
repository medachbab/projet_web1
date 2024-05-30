<?php
require "../../helpers/autoloader.php";
Autoloader::register();
use classes\cours\controler\AddCourseContr;
session_start();
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileErrors = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];


    $fileExtention = explode('.', $fileName);
    $fileActualExtention = strtolower(end($fileExtention));

    $courseTitle = $_POST["title"];
    $module = $_POST["module"];
    $explodedmodule = explode("_", $module);
    $moduleName = end($explodedmodule);
    $moduleId = $explodedmodule[0];
    
    $nospaces =  str_replace(' ', '§', $courseTitle);
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    echo $moduleId . "   " . $moduleName . "   ";
    if(in_array($fileActualExtention, $allowed)){
        if($fileErrors == 0){
            if($fileSize < 1000000000){
                $fileNewName = $moduleId . "_" . $nospaces . "." . $fileActualExtention;
                $fileDestination = '../../uploads/cours/' . $fileNewName;
                $obj = new AddCourseContr($fileNewName, $moduleId);
                $obj->addCoursecont();
                //$_SESSION["uploadedfilename"] = $fileNewName;
                //$_SESSION["uploadedfilemoduleid"] = $moduleId;
                //move_uploaded_file($fileTmpName, $fileDestination);
                //header("location: ../../routing/routing.php?controler=cours&action=f3");

            }else{
                echo "le fichier que vous voulez entrer a une grande taille veuillez diminuer sa taille et le rentrer a nouveau!";
            }
        }else{
            echo " une erreur s'est produite";
        }

    }else{
        //header("location : ");
        echo "tu ne peut pas entrer un fichier de cette extention!". $fileActualExtention . $fileTmpName;
    }
}
?>