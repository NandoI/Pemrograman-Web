<?php 
    if ($_GET) {
        //variable penampung 
        $Buku = $_GET['id']."-".$_GET['judul']."-".$_GET['pengarang']."-".$_GET['Tahun']."-".$_GET['jumlah']."-".$_GET['penerbit']."-".$_GET['kategori']."-".$_GET['gambar']."\n";
        //simpan ke file
        $file_name = "Daftar.txt";
        if(file_put_contents($file_name, $Buku, FILE_APPEND) !== false) {
            echo "Data berhasil disimpan";
        } else {
            echo "data tidak berhasil disimpan";
        }

        echo '<br><br><a href="index.php">Kembali</a>';
        echo '<br><br><a href="read.php">untuk melihat data</a>';
        echo '<br><br><a href="coab.php">untuk update data</a>';

    }

?>