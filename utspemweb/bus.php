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
    <title>Bus</title>
</head>
<body>
<h5 align='center'> Bus </h5>
    <div class='navbar'align="center">
        <form method="post">
            <label for="status">Filter status Bus</label>
            <select name="status" id="status">
                <option value="semua">semua</option>
                <option value="1">Beroprasi</option>
                <option value="2">Cadangan</option>
                <option value="0">Rusak</option>
            </select>
            <input type="submit" name="submit" value="filter">
        </form>
            <table>
                <tr style="background-color: green;">
                    <th>id_Bus</th>
                    <th>plat</th>
                    <th>status</th>
                    <th>jumlah_km</th>
                </tr>
            <?php 
            include ('conn.php');
            $no=1;
            if(isset($_POST['submit'])){
                $status = $_POST['status'];
                if($status == "semua"){
                    $query = mysqli_query($conn,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus");
                } else {
                    $query = mysqli_query($conn,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus WHERE bus.status = '$status'");
                }
            } else {
                $query = mysqli_query($conn,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus");
            }
            while ($tampil = mysqli_fetch_array($query)){
                if ($tampil['status'] == '1') {
                    $warna = 'green';
                } elseif ($tampil['status'] == '2') {
                    $warna = 'yellow';
                } else {
                    $warna = 'red';
                }
                // Function Read
                echo "
                <tr>
                <td>$tampil[id_bus] </td>
                <td>$tampil[plat] </td>
                <td><span style='color: $warna;'>".$tampil['status']."</span></td>
                <td>$tampil[jumlah_km] </td>
                </tr>";
                $no++;
            }
            ?>
        </table>
    </div>
    <div class='pilihan'>
        <a href="./CRUD BUS/create.php">Tambah data</a>
        <br><br>
        <a href="./CRUD BUS/update.php">Update data</a>
        <br><br>
        <a href="./CRUD BUS/delete.php">Delete data</a>
        <br><br>
    </div>
</body>
</html>