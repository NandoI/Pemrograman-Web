<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "nandopoi123";
$dbName = "classicmodels";

$conn = mysqli_connect($dbHost,$dbUser,$dbPass);
if ($conn){
    $buka = mysqli_select_db($conn,$dbName);
    echo "Database dapat terhubung";
    if (!$buka) {
        echo "Database tidak dapat terhubung";
    }
}
else {
    echo "MySql Tidak Terhubung";
}

?>