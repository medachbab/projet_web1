<?php
require_once './conn.php';

   $currentDate = date("Y-m-d");
   $req=$this->conn()->prepare("SELECT m.id_module, m.nom_module From module");
   $req->execute(array($id_prof, $currentDate, $currentDate));
   //j'essai de retourner un tableau associative ou le nom_du_module->key et id_module->value
   $modules = [];
   while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
       $module_name = $row['nom_module'];
       $module_id = $row['id_module'];           
       $modules[$module_name] = $module_id;
   }