<?php 
include('conn.php');
//cek tombol submit
if (isset($_POST["submit"])){

    $simpan = mysqli_query($conn," insert into kondektur set

    id_kondektur = '$_POST[id_kondektur]',
    nama = '$_POST[nama]'");

    if ($simpan){
        echo "<script> alert('Data berhasil disimpan')</script>";
        header("refresh:0;customers.php");
    } else {
        echo "<script> alert('Data tidak tersimpan')</script>";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <h1>create Data</h1>

    <form action="" method="post">
        <ul>
            <li>
            <label for="id_kondektur">id_kondektur :</label>
                <input type="text" name="id_kondektur" id="id_kondektur">
            </li>
            <li>
            <label for="nama">nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
            <button type="submit" name="submit">Insert

            </button>
            </li>
        </ul>



    </form>
</body>
</html>