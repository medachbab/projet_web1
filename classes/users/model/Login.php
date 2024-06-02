<?php
//require_once __DIR__ . "/../../dbhandler_class.php";
//it's the model class (direct interaction with data base)
namespace classes\users\model;
use classes\users\Dbh;
use PDO;
use PDOException;
class Login extends Dbh{
    private function returnTypeOfUser($mail){
        $result = explode("@", $mail);
        if (count($result) === 1 ) {
            header("location: ../../index.php?error=incorrectEmailFormat");
            exit();
        } 
        else{
            $division2= explode(".", $result[1]);
            if (count($division2) <3 || count($division2) > 4 || end($division2) != "ma") {
                header("location: ../../index.php?error=incorrectEmailFormat");
                exit();
            } 
            else{
                if(count($division2) == 3 && $division2[0]=="uae" && $division2[1] == "ac"){
                    $type = "prof";
                    return $type;
                }
                else if(count($division2) == 4){
                    if($division2[1]=="uae" && $division2[2] == "ac"){
                        if($division2[0] == "etu"){
                            $type = "etudiant";
                            return $type;
                        }
                        else if($division2[0] == "admin"){
                            $type = "admin";
                            return $type; 
                        }
                        else{
                            header("location: ../../index.php?error=incorrectEmailFormat");
                            exit(); 
                        }
                    }else{
                        header("location: ../../index.php?error=incorrectEmailFormat"); 
                        exit();
                    }
                }
            }
        }
    }
    protected function getuserByEmail($mail, $pass){
        $userRole = $this->returnTypeOfUser($mail);
        if($userRole == "etudiant"){        
            $test = $this->connect()->prepare('SELECT hashed_pass FROM etudiant2 WHERE mail_etudiant = ?');
        }
        else if($userRole == "prof"){        
            $test = $this->connect()->prepare('SELECT hashed_pass FROM prof WHERE mail_prof = ?');
        }
        else if($userRole == "admin"){        
            $test = $this->connect()->prepare('SELECT hashed_pass FROM admin_table WHERE mail_admin = ?');
        }
        //je vait pas traiter le cas ou aucune condition nest choisi car il ne vas pas se passer        
        //echo"dgcgcxgcfc";
        if(!$test->execute(array($mail))){
            $test = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }
        if($test->rowCount() == 0){
            $test = null;
            header("location: ../../index.php?error=usernotfoundhio");
            exit();
        }
        //si on reussi à trouver le pwd(user exists):
        $hashedpass = $test->fetch(PDO::FETCH_ASSOC);
        $checkpass = password_verify($pass, $hashedpass["hashed_pass"]);
        //$hashedpass= $pass;
        //$checkpass = $hashedpass["hashed_pass"] == $pass;
        if($checkpass == true){
            //authentification reussite alors on prend les donnés de l'user
            //pour les passer a la variable session.
            if($userRole == "etudiant"){        
                $test = $this->connect()->prepare("SELECT * FROM etudiant2 
                                                    WHERE mail_etudiant = ? AND hashed_pass = ?");
            }
            else if($userRole == "prof"){        
                $test = $this->connect()->prepare('SELECT * FROM prof 
                                                    WHERE mail_prof = ? AND hashed_pass = ?');
            }
            else if($userRole == "admin"){        
                $test = $this->connect()->prepare('SELECT * FROM admin_table 
                                                    WHERE mail_admin = ? AND hashed_pass = ?');
            }
            
            if(!$test->execute(array($mail, $hashedpass["hashed_pass"]))){
                $test = null;
                header("location: ../../index.php?error=stmtfailed");
                exit();
            }
            if($test->rowCount() == 0){
                $test = null;
                header("location: ../../index.php?error=hqdqusernotfound");
                exit();
            }
            $user = $test->fetch(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["role"] = $userRole;
            $_SESSION["nom"] = $user["nom"];
            $_SESSION["prenom"] = $user["prenom"];
            $_SESSION["photo"] = $user["photo"];
            if($userRole == "etudiant"){        
                $_SESSION["userid"] = $user["id"];
                $_SESSION["usernumber"] = $user["num_etudiant"];
                $_SESSION["useruid"] = $user["mail_etudiant"];
                $_SESSION["id_filiere"] = $user["id_filiere"];
                $_SESSION["id_niveau"] = $user["id_niveau"];                
                header("location: ../../classes/users/view/studentpersonalpage.php");
                //header("location: ../../classes\users\\view\studentpersonalpage.php");
                exit();
            }
            else if($userRole == "prof"){        
                $_SESSION["userid"] = $user["id_prof"];
                $_SESSION["useruid"] = $user["mail_prof"]; 
                header("location: ../../classes/users/view/profpersonelpage.php");
                exit();
            }
            else if($userRole == "admin"){   
                $_SESSION["userid"] = $user["id_admin"];
                $_SESSION["useruid"] = $user["mail_admin"];
                header("location: ../../classes/users/view/adminpersonelpage.php");
                exit();     
                //echo"en cours de developement";
            }
            
            

        }
        else{
            $test=null;
            header("location: ../../index.php?error=usernotfound&error2=" . $hashedpass["hashed_pass"]);
            exit();
        }

    }
    public function insertPwdToNewUser($academicmail, $personalmail, $hashedpass){
        $userRole = $this->returnTypeOfUser($academicmail);
        $test = null;
        try{
            if($userRole == "etudiant"){        
                $test = $this->connect()->prepare('SELECT id, hashed_pass FROM etudiant2 WHERE mail_etudiant = ? AND e_mail_personnel = ?');
            }
            else if($userRole == "prof"){        
                $test = $this->connect()->prepare('SELECT id_prof, hashed_pass FROM prof WHERE mail_prof = ? AND e_mail_personnel = ?');
            }
            else if($userRole == "admin"){        
                $test = $this->connect()->prepare('SELECT id_admin, hashed_pass FROM admin_table WHERE mail_admin = ? AND e_mail_personnel = ?');
            }
            $test->execute(array($academicmail, $personalmail));
            if($test->rowCount() == 0){
                $test = null;
                echo "user not found";
                //header("location: ../../index.php?error=usernotfound");
                exit();
            }
            $user = $test->fetch(PDO::FETCH_ASSOC);
            if(is_null($user["hashed_pass"])){
                try{
                    if($userRole == "etudiant"){        
                        $req=$this->connect()->prepare("UPDATE etudiant2
                        SET hashed_pass = ?
                        WHERE id = ?;");
                        $req->execute(array($hashedpass, $user["id"]));
                        $_SESSION["pwd_saved"] =1;
                        //header("Location: routing.php?controler=formation&action=f17");

                        //exit();
                        echo "pwd registred successfuly";
                    }
                    else if($userRole == "prof"){        
                        // $test = $this->connect()->prepare('SELECT id_prof, hashed_pass FROM prof WHERE mail_prof = ? AND e_mail_personnel = ?');
                        $req=$this->connect()->prepare("UPDATE prof
                        SET hashed_pass = ?
                        WHERE id_prof = ?;");
                        $req->execute(array($hashedpass, $user["id_prof"]));
                        $_SESSION["pwd_saved"] =1;
                        //header("Location: routing.php?controler=formation&action=f17");

                        //exit();
                        echo "pwd registred successfuly" ;
                    }
                    else if($userRole == "admin"){        
                        // $test = $this->connect()->prepare('SELECT id_admin, hashed_pass FROM admin_table WHERE mail_admin = ? AND e_mail_personnel = ?');
                        $req=$this->connect()->prepare("UPDATE admin_table
                        SET hashed_pass = ?
                        WHERE id_admin = ?;");
                        $req->execute(array($hashedpass, $user["id_admin"]));
                        $_SESSION["pwd_saved"] =1;
                        //header("Location: routing.php?controler=formation&action=f17");

                        //exit();
                        echo "pwd registred successfuly";
                    }
                    $test->execute(array($academicmail, $personalmail));
                } catch (PDOException $e) {
                    $_SESSION["pwd_saved"] =0;
                    //header("Location: routing.php?controler=formation&action=f17");

                    //exit();
                    echo "falure".$e->getMessage(); 
                } 

            }else{
                //retourner a la page;
                echo "pwd already exists";
            } 
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }
}