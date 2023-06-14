<?php
include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$checkEmailQuery = "SELECT * FROM admin_form WHERE username = '$username' AND password = '$password'";
$checkEmailResult = mysqli_query($conn, $checkEmailQuery);

if (mysqli_num_rows($checkEmailResult) > 0) {
    echo "Login berhasil";
    header ("refresh:0;/kelas/uas1/uas/php/adminform.php");
} else {
    echo "Email atau password tidak valid";
}

$conn->close();
?>
