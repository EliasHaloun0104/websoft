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
        <div style="margin-top: 150px;">
        <?php include 'view/header.php'?>
        <button id="myDuck" onclick="hideTheDuck()"></button>
        <script type="text/javascript" src="js/DuckController.js"></script>
        <?php include 'view/update.php'?>
        </div>
        <?php include 'view/footer.php'?>
    </body>
</html>