<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Create</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="icon" href="favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet" />
</head>

<body>
  <!--
Comments are written as HTML style.
-->

  <?php include 'view/header.php' ?>

  <button id="myDuck" onclick="hideTheDuck()"></button>
  <script type="text/javascript" src="js/DuckController.js"></script>

  <div style="margin-top: 100px;">
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Note</th>
          <th>priority</th>
        </tr>
      </thead>
      <tbody>

        <?php
        //$myfile = fopen("Auth.txt", "r") or die("Unable to open file!");
        $dbname = 'id12458153_mynotedatabase';
        $host = 'localhost';
        $username = 'id12458153_eliashaloun';
        $password = 'n%Y3vkkixGqi7.8';
        //fclose($myfile);



        $q;
        try {
          $pdo = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $username, $password);
          $sql = 'SELECT * FROM notes';
          $q = $pdo->query($sql);
          $q->setFetchMode(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
          die("Could not connect to the database $dbname :" . $e->getMessage());
        }


        while ($row = $q->fetch()) :
          echo '<tr>';
          echo '<td>' . $row["id"] . '</td>';
          echo '<td>' . $row["note"] . '</td>';
          echo '<td>' . $row["priority"] . '</td>';
          echo '</tr>';
        endwhile;



        ?>

      </tbody>
    </table>

  </div>

  <div style="margin-top: 20px;">
  
  <h2>Add new note</h2>
    <form action="create.php" method="post">
      <h3>Note</h3>
      <textarea name="note" rows="5" cols="40"></textarea>
      <h3>Priority</h3>
      <select name="priority">
        <option value="1" selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <input type="submit" name="submit" class="generalBtn">
      
      <?php
        if(isset($_POST['submit']))
        {
          $note = $_POST['note'];
          $priority = (int)$_POST['priority'];
          $dbname = 'id12458153_mynotedatabase';
          $host = 'localhost';
          $username = 'id12458153_eliashaloun';
          $password = 'n%Y3vkkixGqi7.8';
          
          try {
            $pdo = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $username, $password);
            


            $statement = $pdo->prepare("INSERT INTO notes (note, priority) VALUES(?, ?)"); 
            
            $statement->bindParam(1, $note, PDO::PARAM_STR);
            $statement->bindParam(2, $priority, PDO::PARAM_INT);
            //bind values and execute insert query
            
            if($statement->execute()){
              print "Your note has been added!";
            }else{
              print $pdo->error; //show mysql error if any
            }



          } catch (PDOException $e) {
            die("Could not connect to the database $dbname :" . $e->getMessage());
          }
        } 

      ?>

    </form>

  </div>
  <?php include 'view/footer.php' ?>
</body>

</html>