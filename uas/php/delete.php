<?php 
include('conn.php');
//cek tombol submit
if (isset($_POST["submit"])){

    $id = $_POST['id'];

    $query1 = "DELETE FROM signup WHERE id = $id";

    if(mysqli_query($conn, $query1)){
       
            echo "<script> alert('Data berhasil dihapus')</script>";
            header("refresh:0;/uas/php/adminform.php");
     } else {
            echo "<script> alert('Data tidak terhapus')</script>";
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
    <h1>Delete Data</h1>

    <form action="" method="post">
        <ul>
            <li>
            <label for="id">id :</label>
                <input type="text" name="id" id="id">
            </li>
            <li>
                <button type="submit" name="submit">Insert

                </button>
            </li>
        </ul>



    </form>
</body>
</html>