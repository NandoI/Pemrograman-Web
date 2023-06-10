<?php
include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$checkEmailQuery = "SELECT * FROM admin_form WHERE username = '$username' AND password = '$password'";
$checkEmailResult = mysqli_query($conn, $checkEmailQuery);

if (mysqli_num_rows($checkEmailResult) > 0) {
    echo "Login berhasil";
} else {
    echo "Email atau password tidak valid";
}

$conn->close();
?>
