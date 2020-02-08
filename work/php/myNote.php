<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>My Note</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap"
      rel="stylesheet"
    />
  </head>
    <body>
        <div style="margin-top: 150px;"></div>
        <?php include 'view/header.php'?>
        <button id="myDuck" onclick="hideTheDuck()"></button>
        <script type="text/javascript" src="js/DuckController.js"></script>
        <?php  
        require 'view/read.php';
        require 'view/update.php';
        require 'view/delete.php';
        require 'view/create.php';
        $pdo = connectDatabase($dsn);
        $q = fetchData($pdo);
        fetchAllRow($q);
        ?>

        <?php include 'view/footer.php'?>
    </body>
</html>