<?php

include_once("config.php");
if (isset($_POST['submit'])) {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $tipe_installer = htmlspecialchars($_POST['tipe_installer']);
    $pesan = htmlspecialchars($_POST['pesan']);

    $email_result = mysqli_query($mysql, "SELECT email FROM tester_request WHERE  email='$email'");

    if (mysqli_num_rows($email_result) < 1) {
        mysqli_query($mysql, "INSERT INTO tester_request(username,email,tipe_installer,pesan) 
        VALUES('$fullname','$email','$tipe_installer','$pesan')");

        echo "
            <script>
                alert ('Data Anda berhasil ditambahkan!');
                document.location.href = 'pregist.php';
            </script>
        ";
    } else {
        $message = "Email Sudah terdaftar";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garuda Linux | Pre-regist</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_pregist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <section class="hdr">
        <header id="navbar">
            <h1 class="logo">Garuda Linux</h1>
            <nav>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Download.php">Download</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="contact.php">Tentang Kami</a></li>
                    </div>
                    <a class="cta" href="pregist.php"><button>Pre-Register</button></a>
            </nav>
        </header>
    </section>

    <section class="regist">
        <div class="form-wrapper">
            <div class="form-register">
                <form action="pregist.php" method="POST">
                    <h2>Regist for Garuda Linux 20.10.4 LTS <br>Version Pre-ReLease</h2>
                    <div class="form-row">
                        <label for="">Your Name</label>
                        <input type="text" name="fullname" id="fullname" class="input-text" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-row">
                        <label for="">Email anda</label>
                        <input type="text" name="email" id="email" class="input-text" placeholder="Email" required>
                    </div>
                    <div class="form-row">
                        <label for="">Tipe Installer</label>
                        <select name="tipe_installer">
                            <option value="Full">Full installer</option>
                            <option value="Live">Live installer</option>
                            <option value="ISO">ISO Installer</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <label>Pesan</label>
                        <textarea name="pesan" rows="5" placeholder="Pesan Anda" class="" required></textarea>
                    </div>
                    <button name="submit" class="button-regist" type="submit">Kirim</button>
                </form>
            </div>
        </div>
    </section>
    <section class="count-down-kernel">
        <div class="countdown-text">
            <h1>Garuda Linux 20.10.4 LTS Version Pre-ReLease</h1>
            <div class="countdown">
                <p id="demo"></p>
            </div>
            <div class="text-lts">
                <p>LTS adalah singkatan dari "Long Term Support".
                    Kami membuat rilis Garuda Linux Desktop dan Server Garuda Linux baru setiap enam bulan. Itu berarti kamu akan selalu
                    memiliki aplikasi terbaru dan terhebat yang ditawarkan dunia open source. Garuda Linux adalah
                    dirancang dengan mempertimbangkan keamanan. Anda mendapatkan pembaruan keamanan gratis setidaknya selama 9 bulan di desktop
                    dan server</p>
            </div>
        </div>
    </section>
    <script src="javascript/script.js"></script>
    <div class="footer-upper">
        <div class="footer-wrapper">
            <div class="content">
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



</body>

</html>