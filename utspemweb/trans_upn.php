<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trans UPN</title>
</head>
<body>
<h5 align='center'> trans_upn </h5>
    <div class='navbar'align="center">  
        <table>
            <tr style="background-color: green;">
                <th>id_trans_upn</th>
                <th>id_kondektur</th>
                <th>id_bus</th>
                <th>id_driver</th>
                <th>jumlah_km</th>
                <th>tanggal</th>
            </tr>
            <?php 
            include ('conn.php');
            $no=1;
            $query = mysqli_query($conn,"SELECT * FROM `trans_upn`");
            while ($tampil = mysqli_fetch_array($query)){
                echo "
                <tr>
                <td>$tampil[id_trans_upn] </td>
                <td>$tampil[id_kondektur] </td>
                <td>$tampil[id_bus] </td>
                <td>$tampil[id_driver] </td>
                <td>$tampil[jumlah_km] </td>
                <td>$tampil[tanggal] </td>
                </tr>";
                $no++;
            }
            ?>
        </table>
    </div>
    <div class='pilihan'>
        <a href="./CRUD/create.php">Tambah data</a>
        <br><br>
        <!-- Function Update -->
        <a href="./CRUD/update.php">Update data</a>
        <br><br>
        <!-- Funtion Delete -->
        <a href="./CRUD/delete.php">Delete data</a>
    <br><br>
    </div>
</body>
</html>
    
</body>
</html>