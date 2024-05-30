<?php
if(isset($_POST['absences'])) {
  if(isset($_POST['absence'])) {
      $absentStudents = array_keys($_POST['absence']);

      $stmt = $conn->prepare("UPDATE absences SET Num_Total_Abc =Num_Total_Abc + 1  WHERE id_ab IN (".implode(",", $absentStudents).")" );
      
      if($stmt->execute()) {
          $msg = "Absences marked successfully.";
      } else {
          $error = "Error marking absences.";
      }

      $placeholders = implode(',', array_fill(0, count($absentStudents), '?'));

        $currentTime = date('Y-m-d');
        $stmt1 = $conn->prepare("UPDATE absences SET date_absences=? WHERE id_ab IN ($placeholders)");
        $params = array_merge([$currentTime], $absentStudents);

        if ($stmt1->execute($params)) {
            $msg = "Absences marked successfully.";
        } else {
            $error = "Error marking absences.";
        }
  } else {
      $error = "No students selected.";
  }

  
}else{
    if(isset($_POST['absences_sp'])) {
        $absentStudents = array_keys($_POST['absence']);
  
        $stmt = $conn->prepare("UPDATE absences SET Num_Total_Abc =Num_Total_Abc-1 WHERE id_ab IN (".implode(",", $absentStudents).")" );
        
        if($stmt->execute()) {
            $msg = "Absences supreme successfully.";
        } else {
            $error = "Error supreme absences.";
        }

        $stmt1 = $conn->prepare("UPDATE absences SET date_absences=0 WHERE id_ab IN (".implode(",", $absentStudents).")");

        if ($stmt1->execute()) {
            $msg = "Absences marked successfully.";
        } else {
            $error = "Error marking absences.";
        }

    } else {
        $error = "No students selected.";
    }

}
?>
