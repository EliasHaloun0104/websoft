<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Delete</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--
Comments are written as HTML style.
-->

<?php include 'view/header.php'?>

    <button id="myDuck" onclick="hideTheDuck()"></button>
    <script type="text/javascript" src="js/DuckController.js"></script>

    <div style="margin-top: 100px;">
    <h2>My Notes</h2>
                    
  <?php
  require "config.php";
  require "functions.php";


  $q;
  try{
  $pdo = connectDatabase($dsn);
  $sql = 'SELECT * FROM notes';
  $q = $pdo->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
  }
  catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
  }

  
  while ($row = $q->fetch()):
    echo '<div style="width:100%; height:150px; border: 2px solid blueviolet; margin: 5px;">';
    $formID = 'form'.$row["id"];
    echo '<form id='.$formID.' action="delete.php" method="post">';
    echo '<div style="float: left; width: 10%;">
    <p>ID</p>
    <p>Note</p>
    <p style="margin-top:32px;">Priority</p>
    </div>';
    echo '<div style="float: left; width: 30%;">';    
    echo '<input form='.$formID.' name="noteId" value='.$row["id"].' readonly style="width:100%; margin:10px;">';
    echo '<textarea form='.$formID.' name="text" style="width:100%; margin:10px;">'.$row["note"].'</textarea>';
    echo prioritySelect($row["priority"], $formID);
    echo '</div>';   
    echo '<input form='.$formID.' type="submit" name="delete" value="Delete" class="generalBtn" style="width:30%; margin:30px;">';
    echo '</form>';
    echo '</div>'; 

  endwhile;
  
  if(isset($_POST['delete']))
    {      
      $noteId = (int)$_POST['noteId'];      
      
      
      try {

        $pdo = connectDatabase($dsn);
        $sql = "DELETE FROM notes WHERE id = ?";
        $statement = $pdo->prepare($sql); 
        $statement->bindParam(1, $noteId, PDO::PARAM_INT);

        //bind values and execute insert query
        if($statement->execute()){
          //print "Your note has been updated!";
        }else{
          //print $pdo->error; //show mysql error if any
        }
        



      } catch (PDOException $e) {
        die("Could not connect to the database $dbname :" . $e->getMessage());
      }
    }


 
  function prioritySelect($string, $formID){
    echo '<select form='.$formID.' name="priority" style="width:100%; margin:10px;">';
    echo '<option value="1" '. ($string == "1" ? 'selected="selected"':'').'>1</option>';
    echo '<option value="2" '. ($string == "2" ? 'selected="selected"':'').'>2</option>';
    echo '<option value="3" '. ($string == "3" ? 'selected="selected"':'').'>3</option>';
    echo '<option value="4" '. ($string == "4" ? 'selected="selected"':'').'>4</option>';
    echo '<option value="5" '. ($string == "5" ? 'selected="selected"':'').'>5</option>';
    echo '</select>';
  }

  function debug($str){
      echo '<script>alert("'.$str.'")</script>';
  }


     
    

  ?>
    

  </div>
  <?php include 'view/footer.php'?>
</body>
</html>

