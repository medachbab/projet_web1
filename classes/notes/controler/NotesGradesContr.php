<?php
    //require_once "C:\\xampp\htdocs\projet_web\classes\dbhandler_class.php";
    namespace classes\notes\controler;
    use classes\notes\model\Notes;
    use PDO;
    use PDOException;
    class NotesGradesContr extends Notes{
        private $notes_etudiants;
        private $pourcentages;
        private $id_module;
        public function __construct($notes_etudiants, $pourcentages, $id_module) {
            $this->notes_etudiants = $notes_etudiants;
            $this->pourcentages = $pourcentages;
            $this->id_module = $id_module;
        }
        public function insertgrades() {
            /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $floatNumber = filter_input(INPUT_POST, 'floatNumber', FILTER_VALIDATE_FLOAT);
    
                if ($floatNumber === false) {
                    die("Invalid input.");
                }       
                /*if ($this->model->insertFloatNumber($floatNumber)) {
                    echo "New record created successfully";
                } else {
                    echo "Error inserting record.";
                }

            }*/
            
            $this->insertgradesbyid($this->notes_etudiants, $this->pourcentages, $this->id_module);   
    }
    public function setgrades() {        
        $this->setgradesbyid($this->notes_etudiants, $this->pourcentages, $this->id_module);   
    }
    }