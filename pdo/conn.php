<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "nandopoi123";
$dbName = "transupn";

try {
 $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass); 

 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $err){
    echo "Failed connec to database server: " . $err->getMessage();
}
?>