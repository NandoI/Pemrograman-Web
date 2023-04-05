<?php
    include ('conn.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costumers</title>
</head>
<body>


    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>


    <div>
        <h5> Costumers </h5>
        <table border="1">
            <tr>
                <th>CsNum</th>
                <th>CsName</th>
                <th>ContactLast</th>
                <th>CantactFirst</th>
                <th>Phone</th>
                <th>Addres1</th>
                <th>Addres2</th>
                <th>City</th>
                <th>State</th>
                <th>Postalcode</th>
                <th>country</th>
                <th>S.R.E.N</th>
                <th>LimitCredit</th>
            </tr>
            <?php 
            include ('conn.php');
            $no=1;
            $query = mysqli_query($conn,"SELECT * FROM `customers`");
            while ($tampil = mysqli_fetch_array($query)){
                echo "
                <tr>
                <td>$tampil[customerNumber] </td>
                <td>$tampil[customerName] </td>
                <td>$tampil[contactLastName] </td>
                <td>$tampil[contactFirstName] </td>
                <td>$tampil[phone] </td>
                <td>$tampil[addressLine1] </td>
                <td>$tampil[addressLine2] </td>
                <td>$tampil[city] </td>
                <td>$tampil[state] </td>
                <td>$tampil[postalCode] </td>
                <td>$tampil[country] </td>
                <td>$tampil[salesRepEmployeeNumber] </td>
                <td>$tampil[creditLimit] </td>
                </tr>";
                $no++;
            }
            ?>
        </table>
    </div>
</body>
</html>