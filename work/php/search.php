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
  require "config.php";
  require "functions.php";
  
  $q;
  try{
  $pdo = connectDatabase($dsn);
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

