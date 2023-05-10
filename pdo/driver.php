<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>driver</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>driver</title>
</head>
<body>
    <h5 align='center'>Driver</h5>
    <div class='navbar' align="center">
        <table>
            <tr style="background-color: green;">
                <th>id_driver</th>
                <th>nama</th>
                <th>no_sim</th>
                <th>alamat</th>
                <th>jumlah KM</th>
            </tr>
            <?php 
            include ('conn.php');
            $no=1;
            $query = $conn->prepare("SELECT trans_upn.jumlah_km, driver.id_driver, driver.nama, driver.no_sim, driver.alamat FROM trans_upn JOIN driver ON trans_upn.id_trans_upn = driver.id_driver");
            $query->execute();

            while ($tampil = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "
                <tr>
                <td>$tampil[id_driver] </td>
                <td>$tampil[nama] </td>
                <td>$tampil[no_sim] </td>
                <td>$tampil[alamat] </td>
                <td>$tampil[jumlah_km] </td>
                </tr>";
                $no++;
            }
            ?>
        </table>
    </div>

    <div class='pilihan'>
        <a href="./CRUD DRIVER/create.php">Tambah data</a>
        <br><br>
        <!-- Function Update -->
        <a href="./CRUD DRIVER/update.php">Update data</a>
        <br><br>
        <!-- Funtion Delete -->
        <a href="./CRUD DRIVER/delete.php">Delete data</a>
    <br><br>
    </div>
</body>
</html>
    
</body>
</html>