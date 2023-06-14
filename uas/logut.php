<?php
session_start();

function logout() {
    // Kode untuk logout pengguna di sini
    // Misalnya, menghapus sesi atau mengatur status login ke false

    // Contoh implementasi sederhana:
    $_SESSION['is_logged_in'] = false;
    $_SESSION['username'] = '';
    $_SESSION['role'] = '';
}

// Periksa apakah pengguna telah login berdasarkan username dan password
if ($_SESSION['is_logged_in'] && !empty($_SESSION['username']) && !empty($_SESSION['password'])) {
    // Lakukan logout jika pengguna telah login
    logout();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <script>
        window.onload = function() {
            alert("Logout berhasil.");
            window.location.href = "/uas/indexx.html"; // Ganti path_to_login.php dengan path menuju halaman login Anda
        };
    </script>
</head>
<body>
</body>
</html>
