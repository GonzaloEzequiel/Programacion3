<?php 

$serverName = "localhost";
$port = "3306";
$userName = "root";
$password = "";

$connectionString = "mysql:host=$serverName:$port;dbname=pruebaDB";

try {    
    $pdo = new PDO($connectionString, $userName, $password);
}
catch(PDOException $e) {
    echo "Error: ".$e->getMessage();
}
