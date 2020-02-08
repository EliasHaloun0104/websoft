<?php
require 'config.php';
require 'functions.php';

function fetchData($pdo){
    $sql = 'SELECT * FROM notes';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    return $q;
}

function oneRecordInForm($id, $note, $priority, $isUpdate, $isDelete, $isCreate){      
    $formID = 'form' . $id;
    
    echo '<form id=' . $formID . ' class="tableRow" action="" method="post">'; 
    echo '<input class="tableCell" form=' . $formID . ' name="noteId" value=' . $id . ' readonly>';
    
    echo '<textarea class="tableCell" form=' . $formID . ' name="text"">' . $note . '</textarea>';
    echo prioritySelect($priority, $formID);
    if($isUpdate){
      echo '<input form=' . $formID . ' type="submit" name="update" value="Update" class="tableButton">';
    }
    if($isDelete){
      echo '<input form=' . $formID . ' type="submit" name="delete" value="Delete" class="tableButton">';
    }
    if($isCreate){
      echo '<input form=' . $formID . ' type="submit" name="create" value="Create" class="tableButton">';
    }
    echo '</form>';
  }
  function prioritySelect($string, $formID)
  {
    echo '<select form=' . $formID . ' class="tableCell" name="priority">';
    option("1", $string);
    option("2", $string);
    option("3", $string);
    option("4", $string);
    option("5", $string);      
    echo '</select>';
  }


  //Create one option inside <select> tag
  function option($OriginalValue, $string){
      echo '<option value="'.$OriginalValue.'" ' . ($string == $OriginalValue ? 'selected="selected"' : '') . '>'.$OriginalValue.'</option>';
  }

  function fetchAllRow($q)
  {
    echo '<div class="tableForm">';
    echo '<div class="tableRow">';
    //echo '<h5 class="tableCell">ID / Note / Priority</h5>';            
    
    echo '</div>';
    while ($row = $q->fetch()):
      oneRecordInForm($row["id"], $row["note"], $row["priority"], true, true, false);
    endwhile;
    oneRecordInForm("-","","", false,false, true);
    echo '</div>';
  }



?>




