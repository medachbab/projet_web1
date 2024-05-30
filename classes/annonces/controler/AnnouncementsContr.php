<?php
    //include("C:\\xampp\htdocs\projet_web\classes\annonces\model\annonces.php");
    namespace classes\annonces\controler;
    use classes\annonces\model\AnnouncementsM;
use Complex\Functions;

    class AnnouncementsContr extends AnnouncementsM{   
        public static function requireview($view, $contentToDisplay){
            global $result ;
            $result = $contentToDisplay;
            $path ="../classes/annonces/view/" . $view . ".php" ;
            require_once $path; 
        } 
        public function getModulesByTeacher(){
            
            $id = $_SESSION["userid"];
            $result = $this->getmodulesByTeacherID($id);
            $view = $_SESSION["required_view"]; 
            if($view == "ajouter_annonce"){
                AnnouncementsContr::requireview("user_add_announcement", $result);
                //require_once "C:\\xampp\htdocs\projet_web\classes\annonces\\view\user_add_announcement.php"; 
            }elseif($view == "choix_mod"){
                AnnouncementsContr::requireview("user_chose_module", $result);
                //require_once "C:\\xampp\htdocs\projet_web\classes\annonces\\view\user_chose_module.php"; 
            }
        }
        public function getmodulesByLevelID(){
            $id = $_SESSION["id_niveau"];
            $result = $this->getmodulesBystdlevel($id);
            AnnouncementsContr::requireview("user_chose_module", $result);
            //require_once "../classes/annonces/view/user_chose_module.php";
        }
        public function getannouncementbymoduleid(){
            $id_module =$_SESSION["id_module"];
            $result = $this->getmodulesannouncements($id_module);
            AnnouncementsContr::requireview("modulesannouncements", $result); 
            //require_once "C:\\xampp\htdocs\projet_web\classes\annonces\\view\modulesannouncements.php";
        }
        public function deleteannouncementcont(){
            if(!empty($_SESSION["dannouncementid"])){
                $id_annonce = $_SESSION["dannouncementid"];
                $this->deleteannouncement($id_annonce);
                if($_SESSION["role"] == "prof"){
                    header("Location: routing.php?controler=annonce&action=f8");
                    exit();
                }elseif($_SESSION["role"] == "admin"){
                    header("Location: routing.php?controler=annonce&action=f15");
                    exit(); 
                }

            }else{
                header("Location: ../");
            } 
        }
        public function refreshannouncementcont(){
            if(!empty($_SESSION["rannouncementid"])){
                $id_annonce = $_SESSION["rannouncementid"];
                $this->refreshannouncement($id_annonce);
                if($_SESSION["role"] == "prof"){
                    header("Location: routing.php?controler=annonce&action=f20");
                    exit();
                }elseif($_SESSION["role"] == "admin"){
                    header("Location: routing.php?controler=annonce&action=f20");
                    exit(); 
                }

            }else{
                header("Location: ../");
            } 
        }
        public function getlevelscontr(){           
            $result = $this->getlevels();
            $view = $_SESSION["required_view"]; 
            if($view == "ajouterannonceParNiveau"){
                AnnouncementsContr::requireview("user_add_announcement", $result);
                //require_once "C:\\xampp\htdocs\projet_web\classes\annonces\\view\user_add_announcement.php";
            }elseif($view == "choix_niv"){
                AnnouncementsContr::requireview("user_choose_level", $result); 
                //require_once "C:\\xampp\htdocs\projet_web\classes\annonces\\view\user_choose_level.php"; 
            } 
            
        }
        public function getAdminsAnnouncementsByLevelIdcontr() {
            if(!empty($_SESSION["id_niveau"])){
                $id_niveau = $_SESSION["id_niveau"];
                $id_admin = $_SESSION["userid"];
                $result = $this->getAdminsAnnouncementsByLevelId($id_niveau, $id_admin);
                AnnouncementsContr::requireview("levels_announcements", $result); 
                //require_once "C:\\xampp\htdocs\projet_web\classes\annonces\\view\levels_announcements.php";

            }else{
                header("Location: ../");
            } 
            
        }
        public function getAdminsAnnouncementsForStudentsByLevelIdContr(){
            if($_SESSION["role"]=="etudiant"){
                $id_niveau = $_SESSION["id_niveau"];
                $result = $this->getAdminsAnnouncementsForStudentsByLevelId($id_niveau);
                AnnouncementsContr::requireview("levels_announcements", $result);  
                //require_once "C:\\xampp\htdocs\projet_web\classes\annonces\\view\levels_announcements.php"; 
            }
        }
        public function getlevelsForTeacherContr() {
            if(!empty($_SESSION["userid"])){
                $id_prof = $_SESSION["userid"];
                //$_SESSION["prof_consulte_par_niveau"] = "annonce";
                $result = $this->getlevelsForTeacher($id_prof);
                AnnouncementsContr::requireview("user_choose_level", $result);  
            }
            
        }
        public function getAdminsAnnouncementsForTeachersByLevelIdContr(){
            $id_niveau = $_SESSION["id_niveau"];
            $result = $this->getAdminsAnnouncementsForTeachersByLevelId($id_niveau);
                AnnouncementsContr::requireview("levels_announcements", $result) ;
        }
        public function getDeletedAdminsAnnouncementsByLevelIdContr(){
            if(!empty($_SESSION["id_niveau"])){
                $id_niveau = $_SESSION["id_niveau"];
                $id_admin = $_SESSION["userid"];
                $result = $this->getDeletedAdminsAnnouncementsByLevelId($id_niveau, $id_admin);
                AnnouncementsContr::requireview("levels_announcements", $result); 
                //require_once "C:\\xampp\htdocs\projet_web\classes\annonces\\view\levels_announcements.php";

            }else{
                header("Location: ../");
            }  
        }
    }