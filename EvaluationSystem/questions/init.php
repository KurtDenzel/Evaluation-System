<?php 

session_start();

$host     = "localhost";//Ip of database, in this case my host machine    
$user     = "root";	//Username to use
$pass     = "";//Password for that user
$dbname   = "evaluation_db";//Name of the database


$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

?>