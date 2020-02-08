<?php
if (isset($_POST['fetchAll'])) {
  $pdo = connectDatabase($dsn);
  $sql = 'SELECT * FROM notes';
  $q = $pdo->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
  fetchRowIntoHTML($q);
}

if (isset($_POST['fetchWildCard'])) {
  $wildCard = $_POST['wildCard'];
  $pdo = connectDatabase($dsn);
  $sql = 'SELECT * FROM notes WHERE note LIKE "%'.$wildCard.'%"';
  $q = $pdo->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
  fetchRowIntoHTML($q);
}


function fetchRowIntoHTML($q)
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

