<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login MyCourse</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div id="sign" class="kontener">
        <div class="kotak">
            <div class="lain-lain">
                <div class="atas">
                    <a href="index.html"><h2>MyCourse</h2></a>
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
                        <input type="submit" value="Login">
                        <div class="br">
                        </div>
                        <p>I'm the <a href="login_admin_form.php">admin!</a></p>
                        <p><a href="signup_form.php">I don't have account yet</a></p>
                    </ul>
                   </form>

                </div>
        </div>
    </div>
</body>
</html>