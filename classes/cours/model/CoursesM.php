<?php
    //require_once "C:\\xampp\htdocs\projet_web\classes\dbhandler_class.php";
    namespace classes\cours\model;
    use classes\cours\Dbh;
    use PDO;
    use PDOException;
    class CoursesM extends Dbh{
        protected function getmodules($id_niveau){
            $currentDate = date("Y-m-d");
            $req=$this->connect()->prepare("SELECT m.id_module, m.nom_module 
                                            From module AS m
                                            INNER JOIN semestre AS s ON m.id_semestre = s.id_semestre 
                                            WHERE m.id_niveau = ? AND s.date_debut <= ? AND s.date_fin >= ?");
            $req->execute(array($id_niveau, $currentDate, $currentDate));
            $modules = [];
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $module_name = $row['nom_module'];
                $module_id = $row['id_module'];           
                $modules[$module_name] = $module_id;
            }
            return $modules;
        }
        protected function getmodulesByTeacherID($id_prof){
            $currentDate = date("Y-m-d");
            $req=$this->connect()->prepare("SELECT m.id_module, m.nom_module 
                                            From module AS m
                                            INNER JOIN semestre AS s ON m.id_semestre = s.id_semestre 
                                            WHERE m.id_prof = ? AND s.date_debut <= ? AND s.date_fin >= ?");
            $req->execute(array($id_prof, $currentDate, $currentDate));
            //j'essai de retourner un tableau associative ou le nom_du_module->key et id_module->value
            $modules = [];
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $module_name = $row['nom_module'];
                $module_id = $row['id_module'];           
                $modules[$module_name] = $module_id;
            }
            return $modules;
        }
        protected function addCourse($courseName, $moduleID){
            $currentDate = date("Y-m-d");
            try {
                $req=$this->connect()->prepare("INSERT INTO cour (date_publication_cours, nom_cour, id_module) VALUES (?, ?, ?) ");
                $req->execute(array($currentDate, $courseName, $moduleID));
                $_SESSION["course_sent"] =1;
                // header("Location: routing.php?controler=cours&action=f2");
                // exit();
            } catch (PDOException $e) {
                $_SESSION["course_sent"] =0;
                // header("Location: routing.php?controler=cours&action=f2");
                // exit(); 
            } 
        }
        protected function getcoursesbymoduleid($id_module){
            $req=$this->connect()->prepare("SELECT * FROM cour
                                            WHERE id_module=? AND cours_suprimer = 0
                                            ORDER BY date_publication_cours DESC");
            $req->execute(array($id_module));
            $courses = $req->fetchAll(PDO::FETCH_ASSOC); 
            return $courses;  

        }
        protected function getdeletedcoursesbymoduleid($id_module){
            $req=$this->connect()->prepare("SELECT * FROM cour
                                            WHERE id_module=? AND cours_suprimer = 1");
            $req->execute(array($id_module));
            $courses = $req->fetchAll(PDO::FETCH_ASSOC); 
            return $courses;  

        }
        protected function deletecourse($id_cours){
            $currentTime = date('Y-m-d H:i:s');
            try {
                $req =$this->connect()->prepare("UPDATE cour
                                                SET cours_suprimer = 1, date_supression = ?
                                                WHERE id_cour = ?;");
                $req->execute(array($currentTime, $id_cours));
                $_SESSION["course_deleted"] = 1;
                // header("Location: routing.php?controler=cours&action=f4");
                // exit();
            } catch (PDOException $e) {
                //echo "Error: " . $e->getMessage();
                //header("Location: ..?deleted=0");
                $_SESSION["course_deleted"] = 0;
                // header("Location: routing.php?controler=cours&action=f4");
                // exit();
            }

        }
        protected function refreshcourse($id_cours){
            $currentTime = date('Y-m-d H:i:s');
            try {
                $req =$this->connect()->prepare("UPDATE cour
                                                SET cours_suprimer = 0, date_publication_cours = ?
                                                WHERE id_cour = ?;");
                $req->execute(array($currentTime, $id_cours));
                $_SESSION["course_refreshed"] = 1;
                // header("Location: routing.php?controler=cours&action=f4");
                // exit();
            } catch (PDOException $e) {
                //echo "Error: " . $e->getMessage();
                //header("Location: ..?deleted=0");
                $_SESSION["course_refreshed"] = 0;
                // header("Location: routing.php?controler=cours&action=f4");
                // exit();
            }

        }
    }