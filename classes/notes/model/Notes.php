<?php
    //require_once "C:\\xampp\htdocs\projet_web\classes\dbhandler_class.php";
    namespace classes\notes\model;
    use classes\notes\Dbh;
    use PDO;
    use PDOException;
    class Notes extends Dbh{
        protected function getmodulesByTeacherID($id_prof){
            $currentDate = date("Y-m-d");
            try{
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
                return $modules;
            }
            }catch(PDOException $e){
                echo "err".$e->getMessage();
            }
            
            
        }
        protected function getstudentsbymoduleid($id_module){
            try{
                $req =$this->connect()->prepare("SELECT e.id, e.nom, e.prenom, e.num_etudiant, e.photo 
                                            FROM etudiant2 e
                                            INNER JOIN niveau n ON e.id_niveau = n.id_niveau
                                            INNER JOIN module m ON m.id_niveau = n.id_niveau
                                            WHERE m.id_module= ?");
                $req->execute(array($id_module)); 
                $result= $req->fetchAll(PDO::FETCH_ASSOC); 
                return $result;
            }catch(PDOException $e){
                echo "err".$e->getMessage();
            }
            

        }
        protected function insertgradesbyid($tablenotes, $tablepourcentage,$id_module){
            try{
                foreach($tablenotes as $key=>$value){
                    $req=$this->connect()->prepare("INSERT INTO notes (note1, note2, note3, id_etudiant, id_module, pourcentage1, pourcentage2, pourcentage3, moyenne, valider) 
                                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
                                                    ORDER BY moyenne DESC; ");
                    $req->execute(array($value[0], $value[1], $value[2], $key, $id_module, $tablepourcentage[0], $tablepourcentage[1], $tablepourcentage[2], $value[3], $value[4]));
                    $_SESSION["grades_inserted"]=1; 
                }
            }catch(PDOException $e){
                echo "err".$e->getMessage();
                $_SESSION["grades_inserted"]=0;
            }
            // echo "notes: <pre>";
            // print_r($tablenotes);
            // echo "</pre>";
            // echo "pourcent: <pre>";
            // print_r($tablepourcentage);
            // echo "</pre>";
            // echo "id_module: <pre>";
            // echo $id_module;
            // echo "</pre>";

            
        }
        protected function getgradsbymoduleid($id_module){
            try{
                $req=$this->connect()->prepare("SELECT e.*, notes.*
                                    FROM etudiant2 e
                                    INNER JOIN notes ON notes.id_etudiant = e.id
                                    INNER JOIN niveau n ON e.id_niveau = n.id_niveau
                                    INNER JOIN module m ON m.id_niveau = n.id_niveau
                                    WHERE m.id_module= ?
                                    ORDER BY notes.moyenne DESC; ");
                $req->execute(array($id_module)); 
                $result =  $req->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }catch(PDOException $e){
                echo "err".$e->getMessage();
            }
            // echo "notes: <pre>";
            // print_r($tablenotes);
            // echo "</pre>";
            // echo "pourcent: <pre>";
            // print_r($tablepourcentage);
            // echo "</pre>";
            // echo "id_module: <pre>";
            // echo $id_module;
            // echo "</pre>";

            
        }
        protected function setgradesbyid($tablenotes, $tablepourcentage,$id_module){
            try{
                foreach($tablenotes as $key=>$value){
                    $req=$this->connect()->prepare("UPDATE notes
                    SET
                      note1 = ?,
                      note2 = ?,
                      note3 = ?,
                      pourcentage1 = ?,
                      pourcentage2 = ?,
                      pourcentage3 = ?,
                      moyenne = ?,
                      valider = ?
                    WHERE id_etudiant = ? AND id_module = ?; ");
                    $req->execute(array($value[0], $value[1], $value[2], $tablepourcentage[0], $tablepourcentage[1], $tablepourcentage[2], $value[3], $value[4], $key, $id_module)); 
                    $_SESSION["grades_seted"]=1;
                }
            }catch(PDOException $e){
                $_SESSION["grades_seted"]=0;
            }
            // echo "notes: <pre>";
            // print_r($tablenotes);
            // echo "</pre>";
            // echo "pourcent: <pre>";
            // print_r($tablepourcentage);
            // echo "</pre>";
            // echo "id_module: <pre>";
            // echo $id_module;
            // echo "</pre>";

            
        }
    }