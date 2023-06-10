<?php
include 'conn.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Validasi email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Format email tidak valid";
    exit;
}

$checkEmailQuery = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
$checkEmailResult = mysqli_query($conn, $checkEmailQuery);

if (mysqli_num_rows($checkEmailResult) > 0) {
    echo "Login berhasil";
} else {
    echo "Email atau password tidak valid";
}

$conn->close();
?>
