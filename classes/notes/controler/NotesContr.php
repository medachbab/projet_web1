<?php
    //require_once "C:\\xampp\htdocs\projet_web\classes\dbhandler_class.php";
    namespace classes\notes\controler;
    use classes\notes\model\Notes;
    class NotesContr extends Notes{
        public function getModulesByTeacher(){
            $id = $_SESSION["userid"];
            global $result;
            $result = $this->getmodulesByTeacherID($id);
            require_once "../classes/notes/view/prof_choose_modules.php"; 
            
        }
        public function getstudentsbymoduleidcontr(){
            $id_module = $_SESSION["id_module"];
            global $students;
            $students = $this->getstudentsbymoduleid($id_module); 
            //require_once "C:\\xampp\htdocs\projet_web\classes\\formation\\view\\formation_profnotesstudents.php";*
            require_once "../classes/notes/view/prof_note_etudiant.php";
        }
        public function getgradsbymoduleidContr() {
            $id_module = $_SESSION["id_module"];
            global $students; 
            $students = $this->getgradsbymoduleid($id_module); 
            $_SESSION["note-a-la-premiere-fois"] = 0;
            if(is_null($students[0]["id_notes"])){
                $_SESSION["note-a-la-premiere-fois"] = 1;
            }
            require_once "../classes/notes/view/prof_modifier_note_etudiant.php"; 
        }
        
    }