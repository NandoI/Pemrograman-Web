<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondektur</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h5 align='center'> Kondektur </h5>
    <div class='navbar'align="center">
        <table >
            <tr style="background-color: green;">
                <th>id_kondektur</th>
                <th>nama</th>
                <th>Jumlah KM</th>
            </tr>
            <?php 
            include ('conn.php');
            $no=1;
            $query = mysqli_query($conn,"SELECT trans_upn.jumlah_km, kondektur.id_kondektur,kondektur.nama FROM trans_upn JOIN kondektur ON id_trans_upn = kondektur.id_kondektur");
            while ($tampil = mysqli_fetch_array($query)){
                echo "
                <tr>
                <td>$tampil[id_kondektur] </td>
                <td>$tampil[nama] </td>
                <td>$tampil[jumlah_km] </td>
                </tr>";
                $no++;
            }
            ?>
        </table>
    </div>

    <div class='pilihan'>
        <a href="./CRUD KONDEKTUR/create.php">Tambah data</a>
        <br><br>
        <!-- Function Update -->
        <a href="./CRUD KONDEKTUR/update.php">Update data</a>
        <br><br>
        <!-- Funtion Delete -->
        <a href="./CRUD KONDEKTUR/delete.php">Delete data</a>
        <!-- Function Menghitung Gaji -->
        <a href="./Gaji/gaji_conductor.php">Hitung Total Gaji</a>
    <br><br>
    </div>
</body>
</html>
    
</body>
</html>