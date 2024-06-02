<?php
    //require_once __DIR__ . "/../model/login_class.php";
    namespace classes\users\controler;
    use classes\users\model\Login;
    use PDO;
    use PDOException;
    class LoginContraddpass extends Login{
        private $academicmail;
        private $personalmail;
        private $newpwd;
        public function __construct($academicmail,$personalmail,$newpwd) {
            $this->academicmail = $academicmail;
            $this->personalmail = $personalmail;
            $this->newpwd = $newpwd;

        }
        public function insertPwdToNewUsercontr(){
            $newpwd = $this->newpwd;
            $hashedpass = password_hash($newpwd, PASSWORD_DEFAULT);
            $this->insertPwdToNewUser($this->academicmail, $this->personalmail, $hashedpass);
        }
    }