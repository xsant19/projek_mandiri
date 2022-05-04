<?php
include_once("config.php");
session_start();

function registrasi()
{
    global $mysql;

    $username = strtolower(stripslashes($_POST["username"]));
    $email = strtolower(stripslashes($_POST["email"]));
    $password = mysqli_real_escape_string($mysql, $_POST["password"]);
    $password2 = mysqli_real_escape_string($mysql, $_POST["confirm-pass"]);

    // cek konfirmasi password
    if ($password !== $password2) {

        return -1;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan ke database
    mysqli_query($mysql, "INSERT INTO user VALUES('','$username','$email','$password')");

    return mysqli_affected_rows($mysql);
}

if (isset($_POST["register"])) {
    $check = registrasi();

    if ($check > 0) {
        echo "
                <script>
                alert ('Akun berhasil dibuat!');
                </script>";
    } else {
        echo  "
            <script>
                alert ('Konfirmasi Password Salah!');
            </script>
            ";
    }
}

if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($mysql, "SELECT * FROM user WHERE 
            email ='$email'");
    //  cek email

    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            // session
            $_SESSION["log"] = true;
            header("Location: dashboard.php");
            exit;
        }
    } else {
        echo "
            <script>
            alert ('Akun Tidak Terdaftar!');
            </script>";
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Garuda Linux | Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="left-content">
            <div class="sign-in-up-content">
                <div class="content-panel">
                    <div class="sign-in-content">
                        <div class="content">
                            <h3>Register Admin</h3>
                            <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                        </div>
                        <img src="img/company.png" alt="" class="image">
                    </div>
                </div>
                <div class="content-panel">
                    <div class="sign-up-content">
                        <div class="content">
                            <h3>Sudah Punya akun ?</h3>
                            <button class="btn transparent" id="sign-in-btn">Sign In</button>
                        </div>
                        <img src="img/company.png" alt="" class="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="right-content">
            <div class="sign-in-up-form">
                <form action="admin.php" method="post" class="sign-in-form">
                    <h2 class="title">Login Admin Garuda Linux</h2>
                    <label for="email" class="input-label">Your Email</label>
                    <input type="text" name="email" id="email" class="input-field" required>

                    <label for="password" class="input-label">Password</label>
                    <input type="password" name="password" id="password" class="input-field" required>

                    <input type="submit" value="Login" class="btn" name="login">
                </form>

                <form action="admin.php" method="POST" class="sign-up-form">
                    <h2 class="title">Register Admin</h2>
                    <label for="username" class="input-label">Username</label>
                    <input type="text" name="username" id="username" class="input-field" required>

                    <label for="email" class="input-label">Email</label>
                    <input type="text" name="email" id="email" class="input-field" required>

                    <label for="password" class="input-label">Password</label>
                    <input type="password" name="password" id="password" class="input-field" required>

                    <label for="confirm-pass" class="input-label">Confirm Password</label>
                    <input type="password" name="confirm-pass" id="confirm-pass" class="input-field" required>

                    <input type="submit" name="register" value="Register" class="btn">
                </form>
            </div>
        </div>

    </div>
    <script src="javascript/script.js"></script>

    <section name="footer">
        <div class="footer-upper">
            <div class="footer-wrapper">
                <div class="content-1">
                    <h3>Tentang Perusahaan</h3>
                    <ul>
                        <li><a href="contact.php">Tentang Kami</a></li>
                        <li><a href="admin.php">Admin Login</a></li>
                        <li><a href="dashboard.php">Admin Dashboard</a></li>
                        <li><a href="index.php">Back To Home</a></li>
                    </ul>
                </div>
                <div class="content-2">
                    <h3>Social Media</h3>

                    <a href=""><i class="fa fa-facebook-square"></i></a>
                    <a href=""><i class="fa fa-github"></i></a>
                    <a href=""><i class="fa fa-youtube-play"></i></a>
                </div>
                <div class="content-3">
                    <h3>Powered By :</h3>
                    <a href=""><img src="img/powered by.png" alt="codex"></a>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-down">
                <small> Copyright &copy; 2021 - I Gede Sumantara, All Rights Reserved.</small>
            </div>
        </footer>
    </section>

</html>