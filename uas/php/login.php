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
    echo "<script> alert ('Login berhasil')</script>";
    header ("refresh:0;/uas/indexloginn.html");
} else {
    echo "<script> alert ('maaf password atau email anda salah')</script>";
    header ("refresh:0;/uas/login_form.php");
}

$conn->close();
?>
