<?php
$host='127.0.0.1';
$db = 'rsgm';
$username = 'postgres';
$password = 'ExokExom12'; 

//require_once 'dbconfig.php';
 
$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
 
try{
 // create a PostgreSQL database connection
 $conn = new PDO($dsn);
 
 // display a message if connected to the PostgreSQL successfully
 if($conn){
 #echo "Connected to the $db database successfully!";
 }
}catch (PDOException $e){
 // report error message
 echo $e->getMessage;
}
?>