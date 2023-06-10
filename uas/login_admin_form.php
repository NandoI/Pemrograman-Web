<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <div id="sign" class="kontener">
        <div class="kotak">
                <div class="form">
                    <h2>Selamat Datang <span>Admin</span></h2>
                    <h3>Isi form yang telah disediakan</h3>
                   <form action="./php/login_admin.php" method="post">
                    <ul>
                        <li><input type="text" placeholder="Username" value="username" name="username"></li>
                        <li><input type="password" placeholder="Password" value="password" name="password"></li>
                        <input type="submit" value="Login">
                    </ul>
                   </form>

                </div>
        </div>
    </div>
</body>
</html>