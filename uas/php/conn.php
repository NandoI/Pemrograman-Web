<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "nandopoi123";
$dbName = "uas_database";

$conn = mysqli_connect($dbHost,$dbUser,$dbPass);
if ($conn){
    $buka = mysqli_select_db($conn,$dbName);
    if (!$buka) {
        echo "Database tidak dapat terhubung";
    }
}
else {
    echo "MySql Tidak Terhubung";
}

?>