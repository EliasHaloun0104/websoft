<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Schools</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="favicon.ico" />
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather&display=swap"
      rel="stylesheet"
    />
  </head>

  <body onload="addKommun()">
    <!--
Comments are written as HTML style.
-->

  <?php include 'view/header.php'?>

    <article>
      <form style="margin-top: 200px" action="">
        <select
          id="kommunForm"
          name="Kommun()"
          onchange="showSchools(this.value)"
        >
        </select>
      </form>
      <h2>Select municipality to show the schools in it</h2>
      <table id="demo"></table>
      <p id ="demo2"></p>

      <script src="js/School.js">     
      </script>
    </article>
    <div id="myDuck">
        <img src="img/duck.png" alt="duck" width="50px">
        <p id="duckCounter" style="font-size: 10px; text-align: center;">drag me!</p>
        <button id="duckButton" onclick="hideTheDuck()">hide me!</button>     
    </div>
    <script type="text/javascript" src="js/DuckController.js"></script>

    
    
    <?php include 'view/footer.php'?>

    
    <script type="text/javascript" src="js/main.js"></script>
    
  </body>
</html>


