<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Update</title>
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

    <div id="myDuck">
      <img src="img/duck.png" alt="duck" width="50px">
      <p id="duckCounter" style="font-size: 10px; text-align: center;">drag me!</p>
      <button id="duckButton" onclick="hideTheDuck()">hide me!</button>     
    </div>
    <script type="text/javascript" src="js/DuckController.js"></script>

    <div style="margin-top: 100px;">
    <h2>My Notes</h2>
                    
  <?php
  //$myfile = fopen("Auth.txt", "r") or die("Unable to open file!");
  $dbname = 'id12458153_mynotedatabase';
  $host = 'localhost';
  $username = 'id12458153_eliashaloun';
  $password = 'n%Y3vkkixGqi7.8';  
  //fclose($myfile);


  $q;
  try{
  $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
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
    echo '<form id='.$formID.' action="update.php" method="post">';
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
    echo '<input form='.$formID.' type="submit" name="update" value="Update" class="generalBtn" style="width:30%; margin:30px;">';
    echo '</form>';
    echo '</div>'; 

  endwhile;
  
  if(isset($_POST['update']))
    {      
      $noteId = (int)$_POST['noteId']; 
      $priority = (int)$_POST['priority'];
      $noteA = htmlentities($_POST['text']);
      
      
      try {

        $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
        $sql = "UPDATE notes SET note=?, priority=? WHERE id=?;";
        $statement = $pdo->prepare($sql); 
        $statement->bindParam(1, $noteA, PDO::PARAM_STR);
        $statement->bindParam(2, $priority, PDO::PARAM_INT);
        $statement->bindParam(3, $noteId, PDO::PARAM_INT);

        debug($sql);
        //bind values and execute insert query
        if($statement->execute()){
          debug("updated");
          //print "Your note has been updated!";
        }else{
          debug("failed");
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

