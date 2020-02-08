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
        <h1>My Note</h1>
        <?php include 'view/header.php'?>
        <button id="myDuck" onclick="hideTheDuck()"></button>
        <script type="text/javascript" src="js/DuckController.js"></script>
        <form action="" method="post" style="margin: 20px;">
        <input type="submit" class="generalBtn" name="fetchAll" value="Show My Notes"/>
        </form>
        <form action="" method="post" id='searchForm' style="margin: 20px;">
        <input class="generalBtn" name="wildCard" form='searchForm' value="Enter text to search..."/>
        <input type="submit" class="generalBtn" name="fetchWildCard" form='searchForm' value="Search For Notes" />
        </form>
        <?php  
        require 'view/read.php';
        require 'view/update.php';
        require 'view/delete.php';
        require 'view/create.php';
        require 'view/search.php';

        ?>
        
        <div style="margin-top: 20px;"></div>
        
        <?php include 'view/footer.php'?>
    </body>
</html>