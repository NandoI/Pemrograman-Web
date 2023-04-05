<?php 
include('conn.php');
//cek tombol submit
if (isset($_POST["submit"])){

    $simpan = mysqli_query($conn," insert into bus set

    id_bus = '$_POST[id_bus]',
    plat = '$_POST[plat]',
    status = '$_POST[status]'");

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
    <title>Insert</title>
</head>
<body>
    <h1>create Data</h1>

    <form action="" method="post">
        <ul>
            <li>
            <label for="id_bus">id_bus :</label>
                <input type="text" name="id_bus" id="id_bus">
            </li>
            <li>
            <label for="plat">plat :</label>
                <input type="text" name="plat" id="plat">
            </li>
            <li>
            <label for="status">status :</label>
                <input type="text" name="status" id="status">
            </li>
            <li>
                <button type="submit" name="submit">Insert

                </button>
            </li>
        </ul>



    </form>
</body>
</html>