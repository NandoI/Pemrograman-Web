<?php 
include('conn.php');

$status = '';

if (isset($_POST["submit"])){

    $id_driver = $_POST['id_driver'];
    $nama = $_POST['nama'];
    $no_sim = $_POST['no_sim'];
    $alamat = $_POST['alamat'];

    $sql = $conn->prepare("UPDATE driver SET nama= :nama, no_sim= :no_sim, alamat=:alamat WHERE id_driver=:id_driver");
    $sql->bindParam(':id_driver',$id_driver);
    $sql->bindParam(":nama", $nama);
    $sql->bindParam(":no_sim", $no_sim);
    $sql->bindParam(":alamat", $alamat);


    if ($sql->execute()){
        $status = 'ok';
        header("refresh:0;customers.php");
    } else {
        $status = 'error';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h1>Update Data</h1>

    <form action="" method="post">
        <ul>
            <li>
            <label for="id_driver">id_driver :</label>
                <input type="text" name="id_driver" id="id_driver">
            </li>
            <li>
            <label for="nama">nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
            <label for="no_sim">no_sim :</label>
                <input type="text" name="no_sim" id="no_sim">
            </li>
            <li>
            <label for="alamat">alamat :</label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <button type="submit" name="submit">Insert

                </button>
            </li>
        </ul>



    </form>
</body>
</html>