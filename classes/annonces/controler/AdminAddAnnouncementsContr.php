<?php
    //include("C:\\xampp\htdocs\projet_web\classes\annonces\model\annonces.php");
    namespace classes\annonces\controler;
    use classes\annonces\model\AnnouncementsM;
    //j'ai isoler ce controleur car l'user va entrer des infos massantes que je ne peux pas envoyer dans une session
    class AdminAddAnnouncementsContr extends AnnouncementsM{
        private $id_admin;
        private $object;
        private $text;
        private $multimedias_name;
        private $id_niveau;
        private $destinataires;
        public function __construct($id_admin, $object, $text, $mutimedias_name, $id_niveau, $destinataires) {
            $this->id_admin = $id_admin;
            $this->object = $object;
            $this->text = $text;
            $this->id_niveau= $id_niveau;
            $this->destinataires= $destinataires;    
        }
        public function addannouncementByAdmin() {
            $destineretd = 0;
                $destinerprof = 0;
                foreach($this->destinataires as $destinataire){
                    if($destinataire == "etudiants"){
                        $destineretd = 1;
                    }elseif($destinataire == "profs"){
                        $destinerprof = 1;
                    }
                }
            $this->adminaddannouncement($this->id_admin, $this->object, $this->text, $this->multimedias_name,$this->id_niveau, $destinerprof, $destineretd);
            header("Location: ../../routing/routing.php?controler=annonce&action=f13");
            exit();
        }
    }