<?php

use PhpParser\Node\Stmt\ElseIf_;

    session_start();
    $controler = $_GET["controler"];
    $action = $_GET["action"];
    $role = $_SESSION["role"];
    require "../helpers/autoloader.php";
    Autoloader::register();
    use classes\cours\controler\CoursesContr;
    use classes\annonces\controler\AnnouncementsContr; 
    use classes\notes\controler\NotesContr;
    if($controler == 'cours'){
        //require_once "../classes/cours/controler/CoursesContr.php";
        if($action == "f1"){
            
            $_SESSION["required_view"]="cours";
           
            $contr = new CoursesContr();
            $contr->getAllmodulesByLevelID();      
        }
        elseif($action == "f2"){
            
            $_SESSION["required_view"] = "courses";
            $contr = new CoursesContr();
            $contr->getModulesByTeacher();
        }
        elseif($action == "f3"){
            
            
            // $contr = new CoursesContr();
            // $contr->addCoursecont();
            // header("location: ../classes/formation/view/formationProf_view.php?success=filesaved");
            // //unset($_SESSION['uploadedfilemoduleid']);
            // //unset($_SESSION['uploadedfilename']);
        }
        elseif($action == "f4"){
            $_SESSION["required_view"] ="cours";      
            $contr = new CoursesContr();
            $contr->getcoursesbymoduleidcontr();
            //unset($_SESSION['id_module']);
        }
       
       elseif($action == "f14"){
            
        $_SESSION["prof-consulter"]= "cours"; 
        $_SESSION["required_view"]= "choix_mod";      
        $contr = new CoursesContr();
        $contr->getModulesByTeacher(); 
    }
    elseif($action == "f15"){
        if(isset($_GET["courseid"])){
            if(!empty($_GET["courseid"])){
                $_SESSION["dcourseid"] = $_GET["courseid"] ;
                $contr = new CoursesContr();
                $contr->deletecoursecont();  

            }else{
                header("Location: ../");
            }
        }else{
            header("Location: ../");
        }
    }elseif($action == "f16"){
            
        $_SESSION["prof-consulter"]= "cours_suprimer"; 
        $_SESSION["required_view"]= "choix_mod";      
        $contr = new CoursesContr();
        $contr->getModulesByTeacher(); 
    }elseif($action == "f17"){
        $_SESSION["required_view"] ="cours";      
        $contr = new CoursesContr();
        $contr->getdeletedcoursesbymoduleidcontr();
        //unset($_SESSION['id_module']);
    }elseif($action == "f18"){
        if(isset($_GET["courseid"])){
            if(!empty($_GET["courseid"])){
                $_SESSION["rcourseid"] = $_GET["courseid"] ;
                $contr = new CoursesContr();
                $contr->refreshcoursecont();  

            }else{
                header("Location: ../");
            }
        }else{
            header("Location: ../");
        }
    }
    }
    elseif($controler == 'annonce'){
        //require_once '../classes/formation/controler/controler.php';
        //require_once "C:\\xampp\htdocs\projet_web\classes\annonces\controler\annoncesContr.php";
        
        if($action == "f5") {
            //require_once "C:\\xampp\htdocs\projet_web\classes\annonces\controler\profaddannouncementContr.php";
            $_SESSION["required_view"] = "ajouter_annonce";
            $contr = new AnnouncementsContr();
            $contr->getModulesByTeacher(); 
       }elseif($action == "f7") {
            $_SESSION["prof-consulter"]= "annonces";
            $_SESSION["required_view"] = "choix_mod";
            $contr = new AnnouncementsContr();
            $contr->getModulesByTeacher(); 
        }elseif($action == "f8"){           
            $contr = new AnnouncementsContr();
            $contr-> getannouncementbymoduleid();
        }elseif($action == "f9"){           
            $contr = new AnnouncementsContr();
            $contr-> getAdminsAnnouncementsForStudentsByLevelIdContr();
        }elseif($action == "f10"){     
            $_SESSION["etudiant-consulter"] = "annonces";      
            $contr = new AnnouncementsContr();
            $contr-> getmodulesByLevelID();
        }
        elseif($action == "f16"){
            if(isset($_GET["announcementid"])){
                if(!empty($_GET["announcementid"])){
                    $_SESSION["dannouncementid"] = $_GET["announcementid"] ;
                    $contr = new AnnouncementsContr();
                    $contr->deleteannouncementcont(); 

                }else{
                    header("Location: ../");
                }
                //echo "ah";
            }else{
                //echo "la";
                header("Location: ../");
            }
        }elseif($action == "f13"){
             
            $_SESSION["required_view"]= "ajouterannonceParNiveau";          
            $contr = new AnnouncementsContr();
            $contr->getlevelscontr();
        }elseif($action == "f14"){
            $_SESSION["required_view"]="choix_niv";  
            $_SESSION["fonction"]="annonces"  ;     
            $contr = new AnnouncementsContr();
            $contr->getlevelscontr();
        }
        elseif($action == "f15"){                    
            $contr = new AnnouncementsContr();
            $contr->getAdminsAnnouncementsByLevelIdcontr();
        }
        elseif($action == "f17"){                   
            $contr = new AnnouncementsContr();
            $contr->getlevelsForTeacherContr();
        } 
        elseif($action == "f18"){                    
            $contr = new AnnouncementsContr();
            $contr->getAdminsAnnouncementsForTeachersByLevelIdContr();
        }
        elseif($action == "f19"){
            $_SESSION["required_view"]="choix_niv";  
            $_SESSION["fonction"]="annonces_suprimer"  ;     
            $contr = new AnnouncementsContr();
            $contr->getlevelscontr();
        }
        elseif($action == "f20"){    
            $contr = new AnnouncementsContr();
            $contr->getDeletedAdminsAnnouncementsByLevelIdContr();
        }
        elseif($action == "f21"){
            if(isset($_GET["announcementid"])){
                if(!empty($_GET["announcementid"])){
                    $_SESSION["rannouncementid"] = $_GET["announcementid"] ;
                    $contr = new AnnouncementsContr();
                    $contr->refreshannouncementcont(); 

                }else{
                    header("Location: ../");
                }
                //echo "ah";
            }else{
                //echo "la";
                header("Location: ../");
            }
        }
    }
     elseif($controler == 'note'){
        if($action == "f1"){
            
            $_SESSION["required_view"] = "choix_mod";
            $_SESSION["choix"] = "notes";
             $_SESSION["prof-noter"] = "etudiants";
            $contr = new NotesContr();
            $contr-> getModulesByTeacher();
        }
        elseif($action == "f2"){
            $contr = new NotesContr();
            $contr->getgradsbymoduleidContr(); 
        }

    }
    