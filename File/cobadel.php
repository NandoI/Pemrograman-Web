<?php
if ($_GET) {
    if (isset($_GET['delete'])) {
        $deleteBuku = $_GET['delete'];
        $file_name = "Daftar.txt";
        $data = file($file_name);
        
        $index = array_search($deleteBuku, $data);
        if ($index !== false) {
    
            unset($data[$index]);
            
            if (file_put_contents($file_name, implode("", $data)) !== false) {
                echo "<p>Data berhasil dihapus</p>";
            } else {
                echo "<p>Data tidak berhasil dihapus</p>";
            }
        } else {
            echo "<p>Data tidak ditemukan</p>";
        }
        
        echo '<br><br><a href="index.php">Kembali</a>';
        echo '<br><br><a href="read.php">Untuk melihat data</a>';
    }
}
?>
