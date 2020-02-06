<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Flags</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="favicon.ico" />
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather&display=swap"
      rel="stylesheet"
    />
    <script src="js/flag.js"></script>
  </head>

  <body>
    <!--
Comments are written as HTML style.
-->

<?php include 'view/header.php'?>

  <button id="myDuck" onclick="hideTheDuck()"></button>
  <script type="text/javascript" src="js/DuckController.js"></script>
  
    

    <div style="margin-top: 70px;">
        <a class="flagLink" href="#Germany" onclick="showFlag('Germany')">Germany</a>
        <a class="flagLink" href="#Netherlands" onclick="showFlag('Netherlands')">Netherlands</a>
        <a class="flagLink" href="#Sweden" onclick="showFlag('Sweden')">Sweden</a>
        <a class="flagLink" href="#Italy" onclick="showFlag('Italy')">Italy</a>
        <a class="flagLink" href="#Denmark" onclick="showFlag('Denmark')">Denmark</a>

    </div>

    <div style="position: fixed; top: 100px; left: 50px; width: 200px; padding: 10px; height: 200px; background-color: blueviolet;">
      <p id ='countryInfo' style="color: white; margin-top: 10px;"></p>
    </div>
        
 


    
    
    
    <div id="Germany" class="flagDiv" onclick="hideFlag(this.id)">
        <div style="background-color: black; width: 100%; height: 150px;"></div>
        <div style="background-color: red; width: 100%; height: 150px;"></div>
        <div style="background-color: orange; width: 100%; height: 150px;"></div>
    </div>

    <div id="Netherlands" class="flagDiv" onclick="hideFlag(this.id)">
        <div style="background-color: red; width: 100%; height: 150px;"></div>
        <div style="background-color: white; width: 100%; height: 150px;"></div>
        <div style="background-color: blue; width: 100%; height: 150px;"></div>
    </div>

    <div id="Sweden" class="flagDiv" onclick="hideFlag(this.id)"> 
        <div>
          <div style="background-color: blue; width: 30%; height: 190px; float:left;"></div>
          <div style="background-color: yellow; width: 10%; height: 190px; float:left"></div>
          <div style="background-color: blue; width: 60%; height: 190px; float:right;"></div>
        </div>
        <div>
          <div style="background-color: yellow; width: 30%; height: 70px; float:left;"></div>
          <div style="background-color: yellow; width: 10%; height: 70px; float:left"></div>
          <div style="background-color: yellow; width: 60%; height: 70px; float:right;"></div>
        </div>
        <div>
          <div style="background-color: blue; width: 30%; height: 190px; float:left;"></div>
          <div style="background-color: yellow; width: 10%; height: 190px; float:left"></div>
          <div style="background-color: blue; width: 60%; height: 190px; float:right;"></div>
        </div>
    </div>

    <div id="Italy" class="flagDiv" onclick="hideFlag(this.id)">
        <div style="background-color: green; width: 33%; height: 450px; float:left;"></div>
        <div style="background-color: white; width: 34%; height: 450px; float:left"></div>
        <div style="background-color: red; width: 33%; height: 450px; float:right;"></div>
    </div>

    <div id="Denmark" class="flagDiv" onclick="hideFlag(this.id)"> 
        <div>
          <div style="background-color: red; width: 30%; height: 190px; float:left;"></div>
          <div style="background-color: white; width: 10%; height: 190px; float:left"></div>
          <div style="background-color: red; width: 60%; height: 190px; float:right;"></div>
        </div>
        <div>
          <div style="background-color: white; width: 30%; height: 70px; float:left;"></div>
          <div style="background-color: white; width: 10%; height: 70px; float:left"></div>
          <div style="background-color: white; width: 60%; height: 70px; float:right;"></div>
        </div>
        <div>
          <div style="background-color: red; width: 30%; height: 190px; float:left;"></div>
          <div style="background-color: white; width: 10%; height: 190px; float:left"></div>
          <div style="background-color: red; width: 60%; height: 190px; float:right;"></div>
        </div>
    </div>
    <?php include 'view/footer.php'?>
    
  </body>
</html>
