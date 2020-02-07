<?php
require "config.php";
require "functions.php";

if (isset($_POST['fetchAll'])) {
  $pdo = connectDatabase($dsn);
  $sql = 'SELECT * FROM notes';
  $q = $pdo->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);  
}

if (isset($_POST['fetchWildCard'])) {
  $wildCard = $_POST['wildCard'];
  $pdo = connectDatabase($dsn);
  $sql = 'SELECT * FROM notes WHERE note LIKE $wildCard';
  $q = $pdo->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
}
?>

