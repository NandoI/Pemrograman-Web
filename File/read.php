<?php

    echo "<h3>Buku</h3>";
    $file_nam = "Daftar.txt";

    $read = file($file_nam);

echo
    "<table>
        <tr>
            <td>Id</td>
            <td>judul</td> 
            <td>pengarang</td>
            <td>tahun</td>
            <td>jumlah</td>
            <td>penerbit</td>
            <td>kategori</td>
            <td>gambar</td>
        </tr>";

        foreach ($read as $mhs) {
            $data_mhs = explode("-", $mhs);
            echo "<tr>";
            echo "<td>$data_mhs[0]</td>";
            echo "<td>$data_mhs[1]</td>";
            echo "<td>$data_mhs[2]</td>";
            echo "<td>$data_mhs[3]</td>";
            echo "<td>$data_mhs[4]</td>";
            echo "<td>$data_mhs[5]</td>";
            echo "<td>$data_mhs[6]</td>";
            echo "<td>$data_mhs[7]</td>";
            echo "</tr>";
        }
    echo "</table>";

    echo '<br><br><a href="index.php">Kembali</a>';
    echo '<br><br><a href="hapus.php">Delete data</a>'

?>