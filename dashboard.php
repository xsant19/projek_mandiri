<?php
session_start();

if (!isset($_SESSION["log"])) {
    header("Location: admin.php");
    exit;
}
//  koneksi ke database garudalinux
include_once("config.php");


// 
$result = mysqli_query($mysql, "SELECT * FROM tester_request");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Garuda Linux | Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="hdr">
        <header id="navbar">
            <a class="logo-link" href="index.php">
                <h1 class="logo">Admin Garuda Linux</h1>
            </a>
            <nav>
                <ul class="menu">
                    <form action="logout.php" method="post">
                        <button type="submit">Logout</button>
                    </form>
            </nav>
        </header>
    </section>

    <section class="data-regist">
        <div class="content-wrapper">
            <h2>Data Tester Garuda Linux 20.10.4 LTS Version</h2>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Tipe Installer</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $number = 1;
                    while ($row = mysqli_fetch_assoc($result)) :
                    ?>
                        <tr>
                            <td><?= $number ?></td>
                            <td width=150px><?= $row["username"] ?></td>
                            <td><?= $row["email"] ?></td>
                            <td><?= $row["tipe_installer"] ?> </td>
                            <td><?= $row["pesan"] ?></td>
                            <td width=100px>
                                <div class="aksi">
                                    <a href="update.php?id=<?= $row["id"]; ?>" class="ubah">Ubah</a>
                                    <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ?');" class="hapus">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $number++;
                    endwhile;
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <section name="footer">
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
    </section>
</body>

</html>