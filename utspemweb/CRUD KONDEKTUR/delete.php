<?php 
include('conn.php');
//cek tombol submit
if (isset($_POST["submit"])){

    $id_kondektur = $_POST['id_kondektur'];

    $query1 = "DELETE FROM trans_upn WHERE id_kondektur = $id_kondektur";

    if(mysqli_query($conn, $query1)){
        $query2 =  "DELETE FROM kondektur WHERE id_kondektur = $id_kondektur";
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
            <label for="id_kondektur">id_kondektur :</label>
                <input type="text" name="id_kondektur" id="id_kondektur">
            </li>
            <li>
                <button type="submit" name="submit">Insert

                </button>
            </li>
        </ul>



    </form>
</body>
</html>