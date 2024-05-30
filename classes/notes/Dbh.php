<?php
namespace classes\notes;
use PDO;
use PDOException;
class Dbh{
    protected function connect(){
        try{
            $username = "id22241174_projet";
            $pass = "MoH@@0102";
            $dbh =  new PDO('mysql:host=localhost;dbname=id22241174_baseetudiant', $username, $pass);
            return $dbh;

        }catch(PDOException $e){
            echo "error: ". $e->getMessage();
        }
    }
}