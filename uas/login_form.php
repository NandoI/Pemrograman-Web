<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div id="sign" class="kontener">
        <div class="kotak">
            <div class="lain-lain">
                <div class="atas">
                    <h2>MyCourse</h2>
                    <div class="beda">
                        <h3>Welcome Back</h3>
                    </div>
                </div>
                <div class="img">
                    <img src="./img/sign1.png" alt="">
                </div>
            </div>
                <div class="form">
                    <h2>Login</h2>
                    <h3>Isi form yang telah disediakan</h3>
                   <form action="./php/login.php" method="post">
                    <ul>
                        <li><input type="text" placeholder="Email" value="email" name="email"></li>
                        <li><input type="password" placeholder="Password" value="password" name="password"></li>
                        <li><input type="password" placeholder="Re-Enter Password" value="repassword" name="repassword"></li>
                        <input type="submit" value="Login">
                        <div class="br">
                        </div>
                        <p>Login for <a href="#">admin!</a></p>
                    </ul>
                   </form>

                </div>
        </div>
    </div>
</body>
</html>