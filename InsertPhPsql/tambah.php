<?php 
include('conn.php');
//cek tombol submit
if (isset($_POST["submit"])){

    $simpan = mysqli_query($conn," insert into customers set

    customerNumber = '$_POST[customerNumber]',
    customerName = '$_POST[customerName]',
    contactLastName = '$_POST[contactLastName]',
    contactFirstName = '$_POST[contactFirstName]',
    phone = '$_POST[phone]',
    addressLine1 = '$_POST[addressLine1]',
    addressLine2 = '$_POST[addressLine2]',
    city = '$_POST[city]',
    state = '$_POST[state]',
    postalCode = '$_POST[postalCode]',
    country = '$_POST[country]',
    salesRepEmployeeNumber = '$_POST[salesRepEmployeeNumber]',
    creditLimit = '$_POST[creditLimit]'");

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
    <h1>Insert Data</h1>

    <form action="" method="post">
        <ul>
            <li>
            <label for="customerNumber">customerNumber :</label>
                <input type="text" name="customerNumber" id="customerNumber">
            </li>
            <li>
            <label for="customerName">customerName :</label>
                <input type="text" name="customerName" id="customerName">
            </li>
            <li>
            <label for="contactLastName">contactLastName :</label>
                <input type="text" name="contactLastName" id="contactLastName">
            </li>
            <li>
            <label for="contactFirstName">contactFirstName :</label>
                <input type="text" name="contactFirstName" id="contactFirstName">
            </li>
            <li>
            <label for="phone">phone :</label>
                <input type="text" name="phone" id="phone">
            </li>
            <li>
            <label for="addressLine1">addressLine1 :</label>
                <input type="text" name="addressLine1" id="addressLine1">
            </li>
            <li>
            <label for="addressLine2">addressLine2 :</label>
                <input type="text" name="addressLine2" id="addressLine2">
            </li>
            <li>
            <label for="city">city :</label>
                <input type="text" name="city" id="city">
            </li>
            <li>
            <label for="state">state :</label>
                <input type="text" name="state" id="state">
            </li>
            <li>
            <label for="postalCode">postalCode :</label>
                <input type="text" name="postalCode" id="postalCode">
            </li>
            <li>
                <label for="country">country :</label>
                <input type="text" name="country" id="country">
            </li>
            <li>
                <label for="salesRepEmployeeNumber">salesRepEmployeeNumber :</label>
                <input type="text" name="salesRepEmployeeNumber" id="salesRepEmployeeNumber">
            </li>
            <li>
                <label for="creditLimit">creditLimit :</label>
                <input type="text" name="creditLimit" id="creditLimit">    
            </li>
            <li>
                <button type="submit" name="submit">Insert

                </button>
            </li>
        </ul>



    </form>
</body>
</html>