<?php
require "config.php";
require "functions.php";

if(isset($_POST['delete']))
  {      
    $noteId = (int)$_POST['noteId'];  
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
    }
