  <?php
  if (isset($_POST['update'])) {
    $noteId = (int) $_POST['noteId'];
    $priority = (int) $_POST['priority'];
    $noteA = htmlentities($_POST['text']);

    $pdo = connectDatabase($dsn);
    $sql = "UPDATE notes SET note=?, priority=? WHERE id=?;";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(1, $noteA, PDO::PARAM_STR);
    $statement->bindParam(2, $priority, PDO::PARAM_INT);
    $statement->bindParam(3, $noteId, PDO::PARAM_INT);

    //bind values and execute insert query
    if ($statement->execute()) {
      debug("The Note updated.");
      //print "Your note has been updated!";
    } else {
      debug("Something went wrong");
      //print $pdo->error; //show mysql error if any
    }
  }
  ?>
