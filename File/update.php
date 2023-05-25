<?php
if ($_GET) {
    $id_buku = $_GET['id'];
    $judul = $_GET['judul'];
    $pengarang = $_GET['pengarang'];
    $tahun_terbit = $_GET['Tahun'];
    $jumlah_halaman = $_GET['jumlah'];
    $penerbit = $_GET['penerbit'];
    $kategori = $_GET['kategori'];

    $file_name = "./unggah/Daftar.txt";

    $data = file_get_contents($file_name);

    $updated_data = "";
    $entries = explode("\n", $data);
    foreach ($entries as $entry) {
        $fields = explode("-", $entry);
        if ($fields[0] === $id_buku) {
            $fields[1] = $judul;
            $fields[2] = $pengarang;
            $fields[3] = $tahun_terbit;
            $fields[4] = $jumlah_halaman;
            $fields[5] = $penerbit;
            $fields[6] = $kategori;
        }
        $updated_data .= implode("-", $fields) . "\n";
    }

    if (file_put_contents($file_name, $updated_data) !== false) {
        echo "Data berhasil diperbarui.<br>";
    } else {
        echo "Data tidak berhasil diperbarui.<br>";
    }

    echo '<br><br><a href="index.php">Kembali</a>';
    echo '<br><br><a href="read.php">Untuk melihat data</a>';
}
?>
