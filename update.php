<?php

// session_start();

// if (!isset($_SESSION["login"])) {
//     header("Location: admin.php");
//     exit;
// }



include_once("config.php");

function query()
{
    global $mysql, $id;
    $result = mysqli_query($mysql, "SELECT * FROM tester_request WHERE id = $id");

    return mysqli_fetch_assoc($result);
}



//ambil data URL 
if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    // $tester = query("SELECT * FROM tester_request WHERE id = $id");
    $tester = query();
    // fungsi query

}

// query data tester berdasarkan id

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $tipe_installer = htmlspecialchars($_POST['tipe_installer']);
    $pesan = htmlspecialchars($_POST['pesan']);

    $updated = mysqli_query($mysql, " UPDATE tester_request SET
            username = '$fullname',
            email = '$email',
            tipe_installer = '$tipe_installer',
            pesan = '$pesan'
            WHERE id = $id ");

    if ($updated) {
        echo "
            <script>
                alert ('Data Anda berhasil diubah!');
                document.location.href = 'dashboard.php';
            </script>
        ";
    } else {
        echo "gagal";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style_contact.css">
</head>

<body>
    <section class="hdr">
        <header id="navbar">
            <h1 class="logo">Admin Garuda Linux</h1>
            <nav>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Download.php">Download</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="contact.php">Tentang Kami</a></li>
                    </div>
                    <a class="cta" href="dashboard.php"><button>Admin</button></a>
            </nav>
        </header>
    </section>

    <section class="regist">
        <div class="form-wrapper">
            <div class="form-register">
                <form action="update.php" method="POST">
                    <h2>Regist for Garuda Linux 20.10.4 LTS <br>Version Pre-ReLease</h2>
                    <input type="hidden" name="id" value="<?= $tester["id"]; ?>">
                    <div class="form-row">
                        <label for="">Your Name</label>
                        <input type="text" name="fullname" id="fullname" class="input-text" placeholder="Nama Anda" required value="<?= $tester["username"]; ?>">
                    </div>
                    <div class="form-row">
                        <label for="">Email anda</label>
                        <input type="text" name="email" id="email" class="input-text" placeholder="Ubah Email" required value="<?= $tester["email"]; ?>">
                    </div>
                    <div class="form-row">
                        <label for="">Tipe Installer</label>
                        <select name="tipe_installer">
                            <option value="Full">Full installer</option>
                            <option value="Live">Live installer</option>
                            <option value="ISO">ISO installer</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <label>Pesan</label>
                        <textarea name="pesan" rows="5" placeholder="Ubah Pesan" class="" required value=""><?= $tester["pesan"]; ?></textarea>
                    </div>
                    <button name="submit" class="button-regist" type="submit">Ubah</button>
                </form>
            </div>
        </div>
    </section>

    <script src="javascript/script.js"></script>
</body>

</html>