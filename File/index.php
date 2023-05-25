<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>
    <h1>Pilih Aksi</h1>
    <form action="indexcreate.php" method="get">
        <input type="submit" value="create">
    </form>
    <form action="indexdek.php" method="get">
        <input type="submit" value="delete">
    </form>
    <form action="indexup.php" method="get">
        <input type="submit" value="update">
    </form>
    <form action="unggah.php" method="post" enctype="multipart/form-data">
        <input type="file" name="cover" id="cover">
        <input type="submit" value="submit">
    </form>
    
</body>
</html>