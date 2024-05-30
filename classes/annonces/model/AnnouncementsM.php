<?php
    namespace classes\annonces\model;
    use classes\annonces\Dbh;
    use PDO;
    use PDOException;
    

    //require_once "C:\\xampp\htdocs\projet_web\classes\dbhandler_class.php";
    class AnnouncementsM extends Dbh{
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
        protected function getmodulesBystdlevel($id_niveau){
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
        protected function teacheraddannouncement($id_module, $object, $text, $mutimedias_name) {                      
            try {
                $req=$this->connect()->prepare("INSERT INTO annonce (id_module, objet, contenu_text, contenu_multimedia) VALUES (?, ?, ?, ?) ");
                $req->execute(array($id_module, $object, $text, $mutimedias_name));
                $_SESSION["announcement_sent"] =1;                
                
            } catch (PDOException $e) {
                $_SESSION["announcement_sent"] =0;
                
            } 
        }
        public function getteachersacademicmailbymoduleid($id_module){
            $req =$this->connect()->prepare("SELECT p.mail_prof FROM prof AS p
                                            INNER JOIN module AS m ON m.id_prof = p.id_prof 
                                            WHERE m.id_module = ?");
            $req->execute(array($id_module));
            $res =$req->fetch(PDO::FETCH_ASSOC);
            return $res; 
            
        }
        protected function getmodulesannouncements($id_module){
            $req =$this->connect()->prepare("SELECT * FROM annonce WHERE id_module= ? AND annonce_suprimer = 0");
            $req->execute(array($id_module)); 
            $result= $req->fetchAll(PDO::FETCH_ASSOC);
            $tmp = $this->getteachersacademicmailbymoduleid($id_module);
            $mail_prof = 0;
            if (!empty($tmp["mail_prof"])){
                $mail_prof = $tmp["mail_prof"];
            }
            
            $gresult=array("mail_prof"=>$mail_prof, "all_announces"=>$result);
            return $gresult;
        }
        protected function getlevelsannouncements($id_level){
            $req =$this->connect()->prepare("SELECT * FROM annonce WHERE id_niveau= ?");
            $req->execute(array($id_level)); 
            $result= $req->fetchAll(PDO::FETCH_ASSOC);
            $tmp = $this->getteachersacademicmailbymoduleid($id_level);
            $mail_prof = $tmp["mail_prof"];
            $gresult=array("mail_prof"=>$mail_prof, "all_announces"=>$result);;
            return $gresult;
        }
        protected function deleteannouncement($id_annonce){
            $currentTime = date('Y-m-d H:i:s');
            try {
                $req =$this->connect()->prepare("UPDATE annonce
                                                SET annonce_suprimer = 1, date_supression = ?
                                                WHERE id_annonce = ?;");
                $req->execute(array($currentTime, $id_annonce));
                $_SESSION["announcement_deleted"] = 1;
            } catch (PDOException $e) {
                //echo "Error: " . $e->getMessage();
                //header("Location: ..?deleted=0");
                $_SESSION["announcement_deleted"] = 0;
            }

        }
        protected function refreshannouncement($id_annonce){
            $currentTime = date('Y-m-d H:i:s');
            try {
                $req =$this->connect()->prepare("UPDATE annonce
                                                SET annonce_suprimer = 0, date_heure_auto = ?
                                                WHERE id_annonce = ?;");
                $req->execute(array($currentTime, $id_annonce));
                $_SESSION["announcement_refreshed"] = 1;
            } catch (PDOException $e) {
                //echo "Error: " . $e->getMessage();
                //header("Location: ..?deleted=0");
                $_SESSION["announcement_refreshed"] = 0;
            }

        }

        protected function adminaddannouncement($id_admin, $object, $text, $mutimedias_name, $id_niveau, $destinerprof, $destineretd) {
            
            try {
                $req=$this->connect()->prepare("INSERT INTO annonce (id_admin, objet, contenu_text, contenu_multimedia, id_niveau, destiner_profs, destiner_etd) 
                                                VALUES (?, ?, ?, ?, ?, ?, ?) ");
                $req->execute(array($id_admin, $object, $text, $mutimedias_name, $id_niveau, $destinerprof, $destineretd));
                $_SESSION["announcement_sent"] =1;

                
            } catch (PDOException $e) {
                $_SESSION["announcement_sent"] =0;
                
            }

        }
        protected function getlevels(){
            $req=$this->connect()->prepare("SELECT id_niveau, nom_niveau FROM niveau");
            $req->execute();
            //j'essai de retourner un tableau associative ou le nom_du_module->key et id_module->value
            $modules = [];
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            $level_name = $row['nom_niveau'];
            $level_id = $row['id_niveau'];           
            $levels[$level_name] = $level_id;
            }
            return $levels; 
        }
        public function getadminsacademicmailbymoduleid($id_module){
            $req =$this->connect()->prepare("SELECT p.mail_prof FROM prof AS p
                                            INNER JOIN module AS m ON m.id_prof = p.id_prof 
                                            WHERE m.id_module = ?");
            $req->execute(array($id_module));
            $res =$req->fetch(PDO::FETCH_ASSOC);
            return $res; 
            
        }
        protected function getAdminsAnnouncementsByLevelId($id_niveau, $id_admin) {
           
            try{
                $req=$this->connect()->prepare("SELECT a.*, ad.nom, ad.prenom FROM annonce a
                                                INNER JOIN admin_table ad on a.id_admin = ad.id_admin 
                                            WHERE a.id_niveau= ? AND a.annonce_suprimer = 0 AND a.id_admin = ?
                                            ORDER BY a.date_heure_auto DESC;");
                $req->execute(array($id_niveau, $id_admin));         
                $result = $req->fetchAll(PDO::FETCH_ASSOC);
                // echo "<pre>";
                // print_r($result);
                // echo "</pre>";
                return $result;
            }catch(PDOException $e){
                //a revenir
            }
            
            
        }
        protected function getAdminsAnnouncementsForStudentsByLevelId($id_niveau) {
            try{
                $req=$this->connect()->prepare("SELECT a.*, ad.nom, ad.prenom FROM annonce a
                                                INNER JOIN admin_table ad on a.id_admin = ad.id_admin 
                                            WHERE a.id_niveau= ? AND a.annonce_suprimer = 0 AND a.destiner_etd = 1
                                            ORDER BY a.date_heure_auto DESC;");
                $req->execute(array($id_niveau));         
                $result = $req->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }catch(PDOException $e){
                //a revenir
            } 
            
        }
        protected function getlevelsForTeacher($id_prof){
            try{
                $currentDate = date("Y-m-d");
                $req=$this->connect()->prepare("SELECT n.id_niveau, n.nom_niveau
                                                From niveau AS n
                                                INNER JOIN module AS m ON m.id_niveau = n.id_niveau
                                                INNER JOIN semestre AS s ON m.id_semestre = s.id_semestre  
                                                WHERE m.id_prof = ? AND s.date_debut <= ? AND s.date_fin >= ?");
                $req->execute(array($id_prof, $currentDate, $currentDate));
                //j'essai de retourner un tableau associative ou le nom_du_module->key et id_module->value
                $niveaux = [];
                while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                    $level_name = $row['nom_niveau'];
                    $level_id = $row['id_niveau'];           
                    $niveaux[$level_name] = $level_id;
                }
                return $niveaux;
            }catch(PDOException $e){
                //a revenir
            } 
        }
        protected function getAdminsAnnouncementsForTeachersByLevelId($id_niveau) {
            try{
                $req=$this->connect()->prepare("SELECT a.*, ad.nom, ad.prenom FROM annonce a
                                                INNER JOIN admin_table ad on a.id_admin = ad.id_admin 
                                            WHERE a.id_niveau= ? AND a.annonce_suprimer = 0 AND a.destiner_profs = 1
                                            ORDER BY a.date_heure_auto DESC;");
                $req->execute(array($id_niveau));         
                $result = $req->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }catch(PDOException $e){
                //a revenir
            } 
            
        }
        protected function getDeletedAdminsAnnouncementsByLevelId($id_niveau, $id_admin) {
           
            try{
                $req=$this->connect()->prepare("SELECT a.*, ad.nom, ad.prenom FROM annonce a
                                                INNER JOIN admin_table ad on a.id_admin = ad.id_admin 
                                            WHERE a.id_niveau= ? AND a.annonce_suprimer = 1 AND a.id_admin = ?
                                            ORDER BY a.date_heure_auto DESC;");
                $req->execute(array($id_niveau, $id_admin));         
                $result = $req->fetchAll(PDO::FETCH_ASSOC);
                // echo "<pre>";
                // print_r($result);
                // echo "</pre>";
                return $result;
            }catch(PDOException $e){
                //a revenir
            }
            
            
        }
    }