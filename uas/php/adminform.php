<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus</title>
    <link rel="stylesheet" href="../css/read.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trans UPN</title>
</head>
<body>
<h5 align="center">Database MyCourse</h5>
    <div class="form" align="center">  
        <table>
            <tr>
                <th>id</th>
                <th>Email</th>
                <th>Password</th>
                <th>Repassword</th>
            </tr>
            <?php 
            include ('conn.php');
            $no=1;
            $query = mysqli_query($conn,"SELECT * FROM `signup`");
            while ($tampil = mysqli_fetch_array($query)){
                echo "
                <tr>
                <td>$tampil[id] </td>
                <td>$tampil[email] </td>
                <td>$tampil[password] </td>
                <td>$tampil[repassword] </td>
                </tr>";
                $no++;
            }
            ?>
        </table>

        <div class="pilihan">
            <a href="./createadmin.php">Create Data</a>
            <a href="./delete.php">Delete Data</a>
            <a href="./update.php">Update Data</a>
            <a href="../logut.php">Logout</a>
        </div>
    </div>
</body>
</html>
    
</body>
</html>