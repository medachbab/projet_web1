<?php
    //include("C:\\xampp\htdocs\projet_web\classes\annonces\model\annonces.php");
    namespace classes\annonces\controler;
    use classes\annonces\model\AnnouncementsM;
    //j'ai isoler ce controleur aussi car l'user va entrer des infos massantes que je ne peux pas envoyer dans une session
    class ProfAddAnnouncementsContr extends AnnouncementsM{
        private $id_module;
        private $object;
        private $text;
        private $multimedias_name;
        public function __construct($id_module, $object, $text, $multimedias_name) {
            $this->id_module = $id_module;
            $this->object = $object;
            $this->text = $text;
            $this->multimedias_name= $multimedias_name;    
        }
        public function addannouncementByTeacher() {
            $this->teacheraddannouncement($this->id_module, $this->object, $this->text, $this->multimedias_name);
            header("Location: ../../routing/routing.php?controler=annonce&action=f5");
            exit();
        }
    }