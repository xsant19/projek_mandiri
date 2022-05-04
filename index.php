<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garuda Linux | Home </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="hdr">
        <header id="navbar">
            <h1 class="logo">Garuda Linux</h1>
            <nav>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="download.php">Download</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="contact.php">Tentang Kami</a></li>
                    </div>
                    <a class="cta" href="pregist.php"><button>Pre-Register</button></a>
            </nav>
        </header>
        <div class="text-box">
            <h1>Pilihan Tepat untuk Desainer dan Pengguna Desktop</h1>
            <p>Distribusi GNU/Linux dengan Glibc dan Musl berdasar pada Archlinux. <br>Menggunakan runit init,KDE
                lingkungan desktop,pembaruan stabil rilis bergulir dan sumber daya yang efisien.
            </p>
            <a href="#"><button>Download OS</button>
            </a>
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
                    dan server.</p>
            </div>
        </div>
    </section>
    <section class="service">
        <div class="container-service">
            <div class="box-service">
                <h2>01</h2>
                <h3>Ringan untuk Hardware lama</h3>
                <p>OS ringan dengan kammpuan yang baik dan support hardware lama.
                </p>
            </div>
            <div class="box-service">
                <h2>02</h2>
                <h3>Berbasis Arch</h3>
                <p>Karena berbasis Arch linux membuat OS ini siap dalam customisasi dan juga mudah di gunakan oleh pemula
                </p>
            </div>
            <div class="box-service">
                <h2>03</h2>
                <h3>Cocok Untuk Desain</h3>
                <p>Sudah ter-install beberapa aplikasi desain open-source seperti GIMP, Inscape , Da Vinci yang siap dijalankan.
                </p>
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