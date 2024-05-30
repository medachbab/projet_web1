<?php
//controller file it has to extends from the model file
//require_once __DIR__ . "/../model/login_class.php";
namespace classes\users\controler;
use classes\users\model\Login;
use PDO;
use PDOException;
class LoginContr extends Login{
     private $username;
     private $pass;
     public function __construct($username, $pass) {
         $this->username = $username;
         $this->pass=$pass;
     }
    public function getuserByEmail_contr(){
        $this->getuserByEmail($this->username, $this->pass);
    }  
    
}