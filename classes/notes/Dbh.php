<?php
namespace classes\notes;
use PDO;
use PDOException;
class Dbh{
    protected function connect(){
        try{
            $username = "root";
            $pass = "";
            $dbh =  new PDO('mysql:host=localhost;dbname=baseetudiant', $username, $pass);
            return $dbh;

        }catch(PDOException $e){
            echo "error: ". $e->getMessage();
        }
    }
}