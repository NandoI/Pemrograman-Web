<?php 
include('conn.php');
//cek tombol submit
if (isset($_POST["submit"])){

    $simpan = mysqli_query($conn," insert into signup set

    email = '$_POST[email]',
    password = '$_POST[password]',
    repassword = '$_POST[repassword]'");


    if ($simpan){
        echo "<script> alert('Data berhasil disimpan')</script>";
        header("refresh:0;/uas/php/adminform.php");
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
            <!-- <li>
            <label for="id">id :</label>
                <input type="text" name="id" id="id">
            </li> -->
            <li>
            <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
            <label for="password">password :</label>
                <input type="text" name="password" id="password">
            </li>
            <li>
            <label for="repassword">repassword :</label>
                <input type="text" name="repassword" id="repassword">
            </li>
            <li>
                <button type="submit" name="submit">Insert

                </button>
            </li>
        </ul>
    </form>
</body>
</html>