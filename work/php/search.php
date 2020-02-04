<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Search</title>
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
  try{
  $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
  $sql = 'SELECT * FROM notes where note LIKE "W%"';
  $q = $pdo->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
  }
  catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
  }

  
  while ($row = $q->fetch()):
    echo '<tr>';
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["note"].'</td>';
    echo '<td>'.$row["priority"].'</td>';
    echo '</tr>';  
    
  endwhile


 

  ?>

</tbody>
  </table>
  </div>
  <?php include 'view/footer.php'?>
</body>
</html>

