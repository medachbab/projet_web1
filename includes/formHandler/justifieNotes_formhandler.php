<?php
session_start();
require "../../helpers/autoloader.php";
Autoloader::register();
use classes\notes\controler\NotesGradesContr;
use helpers\filtersAndSanitanises\FormHelper;
if($_SESSION["fonction"] == "ajouternotes")
    $returnpath = "../../routing/routing.php?controler=note&action=f2";
elseif($_SESSION["fonction"] == "modifiernotes")
    $returnpath = "../../routing/routing.php?controler=note&action=f4"; 
    if(isset($_POST["submit"])){
                    $id_module = $_SESSION["id_module"];
                    $p1 = $_POST["p1"];
                    $p2 = $_POST["p2"];
                    $p3 = $_POST["p3"];
                    if($_SESSION["fonction"] == "ajouternotes")
                                $_SESSION["grades_inserted"] = 0;
                    elseif($_SESSION["fonction"] == "modifiernotes")
                                $_SESSION["grades_seted"]=0;
                    $_SESSION["msgerr"] = "entrer des valeurs reels";
                    $p1=FormHelper::validateFloatInput($p1, $returnpath);
                    $p2=FormHelper::validateFloatInput($p2, $returnpath); 
                    $p3=FormHelper::validateFloatInput($p3, $returnpath);
                    unset($_SESSION["grades_inserted"], $_SESSION["msgerr"]);
                    $pnotes = array($p1,$p2,$p3);
                    $p1/=100;
                    $p2/=100;
                    $p3/=100;
                    if($p1+$p2+$p3 > 1){
                            if($_SESSION["fonction"] == "ajouternotes")
                                $_SESSION["grades_inserted"] = 0;
                            elseif($_SESSION["fonction"] == "modifiernotes")
                                $_SESSION["grades_seted"]=0;
                            $_SESSION["msgerr"] = "donner des pourcentages resonables";
                            header("location: ".$returnpath);
                            exit();
                        
                    }
                       
                    $students = $_SESSION["stds"];
                    $idstd_notes = [];
                    foreach($students as $std){
                        $id=$std["id"];
                        $n1 = $_POST[$id . "_n1"];
                        $n2 = $_POST[$id . "_n2"];
                        $n3 = $_POST[$id . "_n3"];
                        $n1=FormHelper::validateFloatInput($n1, $returnpath);
                        $n2=FormHelper::validateFloatInput($n2, $returnpath); 
                        $n3=FormHelper::validateFloatInput($n3, $returnpath);
                        $m = $n1 * $p1 + $n2 * $p2 + $n3 * $p3;
                        $v = 1;
                        if($m < 12){
                            $v = 0;
                        }
                        $n = array($n1, $n2, $n3, $m, $v);
                        $idstd_notes[$id] = $n;                   
                    }
                    //$_SESSION["notes"] = $id_notes;
                    unset($_SESSION["stds"]);
                    if($_SESSION["fonction"] == "ajouternotes"){
                        $obj = new NotesGradesContr($idstd_notes, $pnotes, $id_module);
                        $obj->insertgrades();
                        header("location: ../../routing/routing.php?controler=note&action=f2");
                    }elseif($_SESSION["fonction"] == "modifiernotes"){
                        $obj = new NotesGradesContr($idstd_notes, $pnotes, $id_module);
                        $obj->setgrades(); 
                        header("location: ../../routing/routing.php?controler=note&action=f4"); 
                    }
                    
        //header("location: ../../routing/routing.php?controler=formation&action=f11");
        exit();
    }