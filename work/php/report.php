<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Report</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
</head>

<body>



    <?php include 'view/header.php'?>
    <div id="myDuck">
        <img src="img/duck.png" alt="duck" width="50px">
        <p id="duckCounter" style="font-size: 10px; text-align: center;">drag me!</p>
        <button id="duckButton" onclick="hideTheDuck()">hide me!</button>     
    </div>
    <script type="text/javascript" src="js/DuckController.js"></script>


<article>

<header>
<h1>A report from the course </br>
    DA377B Software Development for the Web VT20</h1>
</header>

<section>
<h2>S01</h2>
<p>My very first course was on Khand Academy platform and it was about on of the JavaScript library which use on HTML canvas for drawing. The purpose of the course was to learn programming and not related directory to the web development and my few next courses were taken before starting in Kristianstad Högskola were Web Utveckling & Web Server Programmering for the Swedish secondary school level. The clock below is one of my first trainning project</p>
<p style="text-align: center;">

<canvas id="Clock" width= "400" height="300" style="float: right;"></canvas>
</p>
<script src="js/Clock.js"></script>

<p>I learn a little about Html, CSS, JavaScript, php and SQL and as one of the assignments for those courses I had to build a website both static and dynamic and learn how to send and receive data from and to database using PHP. Since I start my study in Kristianstad Högskola I became far from the web development domain since all our previous courses isn't related directly to the web development.</p>

<p>This course is a great opportunity to restore and add new to my previous information since I never worked with any framework. Specifically, for this section I will try to figure out the whole picture and decide which skills I have to mastered, but in general my interesting is on the backend part.</p>

<p>I learnt to use Git & GitHub but since I'm a person who prefer to deal with GUI, I rarely worked with command line. My knowledge in Git & GitHub doesn't go deep, I assume that I understand and implement the basics push, pull, commit but still have to make some effort and read document behind those, So the Markdown and GitHub pages are new concepts to me..</p>
</section>

<section>
<h2>S02</h2>
<p>During my previous Webutveckling course, I learnt a little about the three basic languages for any web developer, but my knowledge never exceed the course learning since I didn’t practice well, so every time I try to create a webpage I have to return to the documentations. </p>

<p>HTML is a short for Hypertext Markup Language. It’s the language which used to create a website and it’s the basic structure for every page on the web. HTML isn’t exactly programming language, but it used to show images, links, text among others which the page contains. CSS is a short for Cascading Style Sheets, it is a style language which used to decorate a document written in HTML. CSS is the main way to create an attractive website. JavaScript is the 3rd language of the three basic languages for web developing. It used to create the interactivity of the website. </p>
<p style="text-align: center;">
    <img src="img/HTML.png" alt="HTML, CSS, JS Icons" style="width:100%;">
</p>

<p>The browser and the web server communicate through HTTP protocol, a browser as the web server for a specific information and the server respond with the proper content</p>

<P>Since I do not intend to become a web developer, my goal in this section is to remember what I know about the three languages, and to preserve what it takes to be able to survive as a backend developer.</P>

</section>

<section>
<h2>S03</h2>
<p>Since I have a little experience about javascript and it is all about client side. My previous experience </p>
<p>My abilities to compare JavaScript with java is limited due to the lack of knowledge in javascript but from what I know I can define some points.</p>
<p>Java could be used almost everywhere while JavaScript major use is in web front end, Java is much easies to read and understand since there is a class concept which seems is not exist in JavaScript. Java has more focus on defining the data type while JavaScript seems doesn't care at all. Java executes bytecode in a JVM while JavaScript is interpreted and which is in many ways effect the performance.</p>
<p>For this course I intend to got grade 5, I prefer to start working on my own & not using the example until I have to. The intersting and most interesting part was to fetch the data from the mentioned school API. I knew that is not mandotory to fetch it directly from the API but I accepted as a challnge and I implmented it where the municipality name and code get also from the API so all municipalites and schools could be fetch through the page <a href="schools.html">school</a>.</p>
<p>For the duck game I like to make the duck draggable so the user could move it around, and I intend to add extra feature and function</p>
<p>For this course I want to expand my understanding to the Javascript language, some difficulties I faced during fetching the data by reading the documentations to understand how the fetch request work, and how the javascript has similar thread function which used the word <i>then</i>. I expect to establish enough knowledge in order to avoid complex problem when we reach to Node.js and other Javascript library and framework</p>
</section>

<section>
<h2>S04</h2>
<p>To begin with: my experience in node.js, Express.js npm was zero before this section, and to be honest I'm still so far to understand and to be comfortable with Javascript syntax. The only closed service I worked before was Java EE, Jersey library and my experience in that library is also not deep</p>
<p>Working with the three mentioned library is good for someone who has mastered the Javascript language, but for me it's a torture, I faced a lot of problems because of the short time to learn about Node, Express and npm and becasue the lack of knowledge in Javascript. The debugging was hard to me, Specifically between the server and client side mistakes, I wish I do a tutorial before I start the course, at least to memorize my info and to learn more about Javascript in server side.</p>
<p>This coding assignment was until now the most difficult one, I walk through the tutorial step by step but there are a lot of details, so in my submission I start from the teacher example and copy the code, then modified it and tried to understand each piece of code, for the grade 3 the suggested example was enough to do it, but the grade 4 requierments, required me to some research and tutorial in order to understand some issues, I'm still working on the grade 5 requierments, since it's the grade that I seek for.</p>
<p>In the future and for the importance of Node and other Javascript backend framework, I intend to deep my understanding & skills in this field.</p>
</section>

<section>
<h2>S05</h2>
<p>Here is the text for this section.</p>
</section>

<section>
<h2>S06</h2>
<p>Here is the text for this section.</p>
</section>

<section>
<h2>S07</h2>
<p>Here is the text for this section.</p>
</section>

<section>
<h2>S08</h2>
<p>Here is the text for this section.</p>
</section>

<section>
<h2>S09</h2>
<p>Here is the text for this section.</p>
</section>

<section>
<h2>S10</h2>
<p>Here is the text for this section.</p>
</section>



</article>

<?php include 'view/footer.php'?>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
