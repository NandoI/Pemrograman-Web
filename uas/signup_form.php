<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkbox = isset($_POST["checkbox"]) ? $_POST["checkbox"] : "";

    if ($checkbox != "on") {
        $error = "Anda harus menyetujui Persyaratan dan Ketentuan.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/sign.css">
</head>
<body>
    <div id="sign" class="kontener">
        <div class="kotak">
            <div class="lain-lain">
                <div class="atas">
                    <h2>MyCourse</h2>
                    <div class="beda">
                        <h3>Ayo bergabung dengan</h3>
                        <h3>MyCourse</h3>
                    </div>
                </div>
                <div class="img">
                    <img src="./img/sign1.png" alt="">
                </div>
            </div>
                <div class="form">
                    <h2>Create account</h2>
                    <h3>Isi form yang telah disediakan</h3>
                   <form action="./php/signup.php" method="post">
                    <ul>
                        <li><input type="text" placeholder="Email" value="email" name="email"></li>
                        <li><input type="password" placeholder="Password" value="password" name="password"></li>
                        <li><input type="password" placeholder="Re-Enter Password" value="repassword" name="repassword"></li>
                        <input type="submit" value="Daftar" name="submit">
                        <div class="br">
                        </div>
                        <div class="terms">
                            <input type="checkbox" id="checkbox" required>
                            <label for="checkbox">I agree to these 
                                <a href="#sign">Terms & Condition</a>
                            </label>
                        </div>
                        <p>Already have account ? <a href="./login_form.php">Click this!</a></p>
                    </ul>
                   </form>
                </div>
        </div>
    </div>
</body>
</html>