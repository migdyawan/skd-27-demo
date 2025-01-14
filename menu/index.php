<?php
include "../database/db.php";
session_start();

if (!isset($_SESSION['nrp'])){
    header("Location:../index.php");
}

$today = date('Y-m-d');
date_default_timezone_set("Asia/Jakarta");
$time = date('H:i');


?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simas Skadron-27</title>
        <link rel="stylesheet" type="text/css" href="../css/custom_home.css">

    </head>
    <body>
    <div class="burger" id="burger">&#9776;</div> <!-- Hamburger Icon -->

    <div class="sidebar" id="sidebar">
        <h2>Menu</h2>
        <a class="btn btn-danger ganti" href="" role="button">Dashboard</a>
        <a class="btn btn-danger ganti" href="ganti_password.php" role="button">Ganti Password</a>
        <a class="btn btn-danger riwayat" href="riwayat.php" role="button">Riwayat</a>
        <a class="btn btn-danger_logout" href="../controller/controller_logout.php" role="button">Logout</a>
    </div>


    <script>
        const burger = document.getElementById('burger');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');

        burger.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            content.classList.toggle('active');
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <div class="full-width d-flex justify-content-center and align-items-center" class="form-container">

    <div class="welcome">
        <span>Selamat Datang</span> <br>
        <span><?php echo $_SESSION['nama']; ?></span> <br>
    </div>
        <div class="full-width d-flex justify-content-center and align-items-center" class="form-container">
        <form action="../controller/controller_absen.php" method="post" class="">

            <div class="form-group">
                <input name="nama" type="text" class="form-control" value="<?php echo $_SESSION['nama']?>" readonly hidden>
            </div>
            <div class="form-group">
                <input name="nrp" type="text" class="form-control" value="<?php echo $_SESSION['nrp']?> " readonly hidden="">
            </div>
            <div class="form-group">
                <input name="system" type="text" class="form-control" value="<?php echo $_SESSION['system']?> " readonly hidden="">
            </div>
            <div class="form-group">
                <input name="pangkat" type="text" class="form-control" value="<?php echo $_SESSION['pangkat']?> " readonly hidden="">
            </div>
            <div class="form-group">
                <input name="flight" type="text" class="form-control" value="<?php echo $_SESSION['flight']?> " readonly hidden="">
            </div>
            <div class="form-group">
                <input name="tanggal" type="date" class="form-control" value="<?php echo $today;?>" readonly hidden="">
            </div>
            <div class="form-group">
                <input name="jam" type="time" class="form-control" value="<?php echo $time;?>" readonly hidden="">
            </div>
            <div class="form-container">
                <img alt="Logo with number 27, a dragon, and text 'SKADRON UDARA 27'" height="150" src="../image/logo_home.png" width="150" class="logo">
            <?php
            $sql = "SELECT * FROM data WHERE nrp='{$_SESSION['nrp']}' AND tanggal='{$today}' ";
            $result = mysqli_query($mysql, $sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<img src='../image/cek.gif' style='width: 100px; display: flex;justify-content: center;align-items: center;margin-left: 100px'><p>ANDA SUDAH ABSEN</p>";
            } else {
                ?>
                <button class="absen btn btn-primary button-login  rounded" type="submit" name="submit">Absen</button>
            <?php } ?>

        </form>

    </div>

    </div>
    </body>
</html>


