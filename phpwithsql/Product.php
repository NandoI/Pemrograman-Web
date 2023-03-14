<?php
include ('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <div>
    <h4> Produk </h4>
    <table border = "1">
        <tr>
            <th>No</th>
            <th>pCode</th>
            <th>pName</th>
            <th>pLine</th>
            <th>pScale</th>
            <th>pVendor</th>
            <th>pDescription</th>
            <th>qInS</th>
            <th>bPrice</th>
            <th>MSRP</th>
        </tr>
        <?php 
        include ('conn.php');
        $no=1;
        $ambildata = mysqli_query($conn,"SELECT * FROM `products`");
        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
            <td>$no</td>
            <td>$tampil[productCode]</td>
            <td>$tampil[productName]</td>
            <td>$tampil[productLine]</td>
            <td>$tampil[productScale]</td>
            <td>$tampil[productVendor]</td>
            <td>$tampil[productDescription]</td>
            <td>$tampil[quantityInStock]</td>
            <td>$tampil[buyPrice]</td>
            <td>$tampil[MSRP]</td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    </div>
</body>
</html>