<?php
/**
 * Open the database file and catch the exception it it fails
 *
 * @var array $dsn with connection details
 *
 * @return object database connection
 */
function connectDatabase(array $dsn)
{
    try {
        $pdo = new PDO("mysql:host=".$dsn['host'].";dbname=".$dsn['dbname'], $dsn['username'], $dsn['password']);    
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>\n";
        print_r($dsn);
        throw $e;
    }
    return $pdo;
}



function debug($str){
    echo '<script>alert("'.$str.'")</script>';
}

  

  