<?php
include 'conn.php';

$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

// Validasi email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Format email tidak valid";
    exit;
}

if ($password !== $repassword) {
    echo "Password dan konfirmasi password tidak cocok";
    exit;
}

    $checkEmailQuery = "SELECT * FROM signup WHERE email = '$email'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        echo "Email sudah terdaftar";
    } else {
        // Lakukan operasi INSERT jika email belum terdaftar
        $stmt = $conn->prepare("INSERT INTO signup (email, password, repassword) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $password, $repassword);
        if ($stmt->execute()) {
            echo "Registrasi berhasil";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    $conn->close();
?>
