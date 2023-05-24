<?php
if ($_GET) {
    if (isset($_GET['update'])) {
        $updateBuku = $_GET['update'];
        $file_name = "Daftar.txt";
        $data = file($file_name);
        
        $index = array_search($updateBuku, $data);
        if ($index !== false) {

            $data[$index] = $_GET['new_value'];

            if (file_put_contents($file_name, implode("", $data)) !== false) {
                echo "<p>Data berhasil diubah</p>";
            } else {
                echo "<p>Data tidak berhasil diubah</p>";
            }
        } else {
            echo "<p>Data tidak ditemukan</p>";
        }
        
        echo '<br><br><a href="index.php">Kembali</a>';
        echo '<br><br><a href="read.php">Untuk melihat data</a>';
    }
}
?>
