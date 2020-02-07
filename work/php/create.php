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
  <?php include 'view/header.php' ?>

  <button id="myDuck" onclick="hideTheDuck()"></button>
  <script type="text/javascript" src="js/DuckController.js"></script>
  <div style="margin-top: 100px;">   
  <?php
  include "view/read.php";
  setCreateForm();
  ?>
  </div>
  <?php include 'view/footer.php' ?>
</body>

</html>