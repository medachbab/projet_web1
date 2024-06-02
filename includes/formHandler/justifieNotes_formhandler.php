<?php
session_start();
require "../../helpers/autoloader.php";
Autoloader::register();
use classes\notes\controler\NotesGradesContr;
use helpers\filtersAndSanitanises\FormHelper;
// if($_SESSION["fonction"] == "ajouternotes")
//     $returnpath = "../../routing/routing.php?controler=note&action=f2";
// elseif($_SESSION["fonction"] == "modifiernotes")
//     $returnpath = "../../routing/routing.php?controler=note&action=f4"; 
$returnpath="../../routing/routing.php?controler=note&action=f2";
    if(isset($_POST["submit"])){
                    $id_module = $_SESSION["id_module"];
                    $p1 = $_POST["p1"];
                    $p2 = $_POST["p2"];
                    $p3 = $_POST["p3"];
                    // if($_SESSION["fonction"] == "ajouternotes")
                    //             $_SESSION["grades_inserted"] = 0;
                    // elseif($_SESSION["fonction"] == "modifiernotes")
                    $_SESSION["grades_seted"]=0;
                    $_SESSION["msgerr"] = "entrer des valeurs reels";
                    $pr1=FormHelper::validateFloatInput($p1, $returnpath);
                    $pr2=FormHelper::validateFloatInput($p2, $returnpath); 
                    $pr3=FormHelper::validateFloatInput($p3, $returnpath);
                    // unset($_SESSION["grades_inserted"], $_SESSION["msgerr"]);
                    $pnotes = array($p1,$p2,$p3);
                    // $pr1 = (float)$p1;
                    // $pr2 = (float)$p2;
                    // $pr3 = (float)$p3;
                    $pr1 = $pr1/(float)100;
                    $pr2 = (float)$pr2/100;
                    $pr3 = $pr3/(float)100;
                    if($pr1+$pr2+$pr3 > 1){
                            // if($_SESSION["fonction"] == "ajouternotes")
                            //     $_SESSION["grades_inserted"] = 0;
                            // elseif($_SESSION["fonction"] == "modifiernotes")
                            //$_SESSION["grades_seted"]=0;
                            $_SESSION["msgerr"] = "donner des pourcentages resonables";
                            header("location: ".$returnpath);
                            exit();
                        
                    }
                       $p1 =(float)$p1/(float)100; 
                    $students = $_SESSION["stds"];
                    $idstd_notes = [];
                    foreach($students as $std){
                        $id=$std["id"];

                        $n1 = $_POST[$id . "_n1"];
                        $n2 = $_POST[$id . "_n2"];
                        $n3 = $_POST[$id . "_n3"];
                        $nt1=FormHelper::validateFloatInput($n1, $returnpath);
                        $nt2=FormHelper::validateFloatInput($n2, $returnpath); 
                        $nt3=FormHelper::validateFloatInput($n3, $returnpath);
                        if($nt1>20||$nt2>20||$nt3>20||$nt1<0||$nt2<0||$nt3<0){
                            $_SESSION["msgerr"] = "donner des NOTES resonables";
                            header("location: ".$returnpath);
                            exit();
                        }
                        $m = $nt1 * $pr1 + $nt2 * $pr2 + $nt3 * $pr3;
                        $v = 1;
                        if($m < 12){
                            $v = 0;
                        }
                        $n = array($nt1, $nt2, $nt3, $m, $v);
                        $idstd_notes[$id] = $n;                   
                    }
                    //$_SESSION["notes"] = $id_notes;
                    unset($_SESSION["stds"]);
                    if($_SESSION["note-a-la-premiere-fois"] == 1){
                        $obj = new NotesGradesContr($idstd_notes, $pnotes, $id_module);
                        $obj->insertgrades();
                    }elseif($_SESSION["note-a-la-premiere-fois"] == 0){
                        $obj = new NotesGradesContr($idstd_notes, $pnotes, $id_module);
                        $obj->setgrades(); 
                    }
                    header("location: ".$returnpath); 
                    exit();
                
    }
