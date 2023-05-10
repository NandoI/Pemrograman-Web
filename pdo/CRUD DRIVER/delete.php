<?php 
include('conn.php');

$status = '';
$result = '';

if (isset($_POST["submit"])){
    $id_driver = $_POST['id_driver'];

    $query1 = "DELETE FROM trans_upn WHERE id_driver = :id_driver";
    $qry1 = $conn->prepare($query1);
    $qry1->bindParam(':id_driver', $id_driver);

    if($qry1->execute()){
        $query2 =  "DELETE FROM driver WHERE id_driver = :id_driver";
        $qry2 = $conn->prepare($query2);
        $qry2->bindParam(':id_driver', $id_driver);

        if ($qry2->execute()){
            $status = 'ok';
        } else {
            $status = 'err';
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