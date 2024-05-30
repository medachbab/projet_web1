<?php
session_start();
require "../../helpers/autoloader.php";
Autoloader::register();
use classes\annonces\controler\ProfAddAnnouncementsContr; 
use classes\annonces\controler\AdminAddAnnouncementsContr;
if(isset($_POST['submit'])){
    
    $object = $_POST["object"];
    $text = $_POST["contenu_text"];
    
    if($_SESSION["role"]=="prof") {
        $module = $_POST["module"];
    }
    if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileErrors = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];


        $fileExtention = explode('.', $fileName);
        $fileActualExtention = strtolower(end($fileExtention));
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        if(in_array($fileActualExtention, $allowed)){
            if($fileErrors == 0){
                if($fileSize < 1000000000){
                    $fileNewName = uniqid('', true) . "." . $fileActualExtention;
                    $fileDestination = '../../uploads/annonces/' . $fileNewName;
                    move_uploaded_file($fileTmpName, $fileDestination);
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
        if ($_SESSION["role"]=="admin") {
            $classe = $_POST["classe"];
            $destinataires=$_POST["destinataires"];
            if(empty($destinataires)){
                header("Location: ../../classes/annonces/view/user_add_announcement.php?er=entrerenmoinundest");
            }
        }
        if($_SESSION["role"] == "prof"){
            //include_once "../../classes/annonces/controler/profaddannouncementContr.php";
            $obj = new ProfAddAnnouncementsContr($module, $object, $text, $fileNewName);
            $obj->addannouncementByTeacher();
            
        }elseif($_SESSION["role"]=="admin") {
            $id_admin = $_SESSION["userid"];
            //include_once "../../classes/annonces/controler/adminAddAnnouncementContr.php";     
            $obj = new AdminAddAnnouncementsContr($id_admin, $object, $text, $fileNewName, $classe, $destinataires);
            $obj->addannouncementByAdmin(); 
        }

    }
    
}
?>