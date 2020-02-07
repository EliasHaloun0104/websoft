<?php



if(isset($_POST['create']))
{
    $note = $_POST['note'];
    $priority = (int)$_POST['priority'];
    $pdo = connectDatabase($dsn);   
    
    $statement = $pdo->prepare("INSERT INTO notes (note, priority) VALUES(?, ?)"); 
    
    $statement->bindParam(1, $note, PDO::PARAM_STR);
    $statement->bindParam(2, $priority, PDO::PARAM_INT);
    //bind values and execute insert query
    
    if($statement->execute()){
        print "Your note has been added!";
    }else{
        print $pdo->error; //show mysql error if any
    }

}
?>