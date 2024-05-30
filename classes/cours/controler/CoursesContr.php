<?php
    //require_once("./formation.php");
    //require_once 'formation.php
    namespace classes\cours\controler;
    //include("C:\\xampp\htdocs\projet_web\classes\cours\model\cours.php");
    use classes\cours\model\CoursesM;
    class CoursesContr extends CoursesM{
        public static function requireview($view, $contentToDisplay){
            global $result ;
            $result = $contentToDisplay;
            $path ="../classes/cours/view/" . $view . ".php" ;
            require_once $path; 
        }  
        public function getAllmodulesByLevelID(){
            $id = $_SESSION["id_niveau"];
            $result = $this->getmodules($id);
            CoursesContr::requireview("std_choose_modules", $result);
            //require_once "C:\\xampp\htdocs\projet_web\classes\cours\\view\std_choose_modules.php";
        }
        public function getModulesByTeacher(){
            $id = $_SESSION["userid"];
            $view = $_SESSION["required_view"];
            $result = $this->getmodulesByTeacherID($id);
            if($view == "courses"){
                CoursesContr::requireview("prof_add_course", $result);
                // require_once "C:\\xampp\htdocs\projet_web\classes\cours\\view\prof_add_course.php";
            }
            elseif($view == "choix_mod"){
                    CoursesContr::requireview("prof_choose_modules", $result);
                
                // require_once "C:\\xampp\htdocs\projet_web\classes\cours\\view\prof_choose_modules.php"; 
            }
        }
        public function getcoursesbymoduleidcontr() {
            $module_id = $_SESSION["id_module"];
            $result = $this->getcoursesbymoduleid($module_id);
            CoursesContr::requireview("user_consults_modules_courses", $result);
            // require_once "C:\\xampp\htdocs\projet_web\classes\cours\\view\user_consults_modules_courses.php";    
        }
        public function getdeletedcoursesbymoduleidcontr() {
            $module_id = $_SESSION["id_module"];
            $result = $this->getdeletedcoursesbymoduleid($module_id);
            CoursesContr::requireview("user_consults_modules_courses", $result);
            // require_once "C:\\xampp\htdocs\projet_web\classes\cours\\view\user_consults_modules_courses.php";    
        }
        // public function addCoursecont(){
        //     $moduleId = $_SESSION["uploadedfilemoduleid"]; 
        //     $fileNewName = $_SESSION["uploadedfilename"];
        //     $this->addCourse($fileNewName, $moduleId);
        //     header("Location: routing.php?controler=cours&action=f2");
        //     exit();
        // }
        public function deletecoursecont() {
            if(!empty($_SESSION["dcourseid"])){
                $id_cours = $_SESSION["dcourseid"];
                $this->deletecourse($id_cours); 
                header("Location: routing.php?controler=cours&action=f4");
                exit(); 

            }else{
                header("Location: ../");
            } 
            
        }
        public function refreshcoursecont() {
            if(!empty($_SESSION["rcourseid"])){
                $id_cours = $_SESSION["rcourseid"];
                $this->refreshcourse($id_cours); 
                header("Location: routing.php?controler=cours&action=f17");
                exit(); 

            }else{
                header("Location: ../");
            } 
            
        }
    }