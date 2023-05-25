<?php
if ($_GET) {
    $id_buku = $_GET['id'];

    // Baca data dari file
    $file_name = "./unggah/Daftar.txt";
    $data = file($file_name);

    // Cari data yang sesuai dengan ID buku
    $deleted = false;
    foreach ($data as $index => $line) {
        $fields = explode("-", $line);
        if ($fields[0] == $id_buku) {
            unset($data[$index]); // Hapus data dari array
            $deleted = true;
            break;
        }
    }

    // Jika data berhasil dihapus, tulis kembali data ke file
    if ($deleted && file_put_contents($file_name, implode("", $data))) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Gagal menghapus data.";
    }

    echo '<br><br><a href="index.php">Kembali</a>';
    echo '<br><br><a href="read.php">untuk melihat data</a>';
}