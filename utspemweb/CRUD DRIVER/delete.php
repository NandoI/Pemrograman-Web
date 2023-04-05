<?php 
include('conn.php');
//cek tombol submit
if (isset($_POST["submit"])){

    $id_driver = $_POST['id_driver'];

    $query1 = "DELETE FROM trans_upn WHERE id_driver = $id_driver";

    if(mysqli_query($conn, $query1)){
        $query2 =  "DELETE FROM driver WHERE id_driver = $id_driver";
        if (mysqli_query($conn,$query2)){
            echo "<script> alert('Data berhasil dihapus')</script>";
            header("refresh:0;customers.php");
        } else {
            echo "<script> alert('Data tidak terhapus')</script>";
        }
    }
} else {
    echo "Data gagal dihapus dari tabel transUPN";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <h1>Delete Data</h1>

    <form action="" method="post">
        <ul>
            <li>
            <label for="id_driver">id_driver :</label>
                <input type="text" name="id_driver" id="id_driver">
            </li>
            <li>
                <button type="submit" name="submit">Insert

                </button>
            </li>
        </ul>



    </form>
</body>
</html>