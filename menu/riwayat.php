<?php
include "../database/db.php";
session_start();

if (!isset($_SESSION['nrp'])){
    header("Location:../index.php");
}

$today = date('Y-m-d');
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simas Skadron-27</title>
    <link rel="stylesheet" type="text/css" href="../css/custom_riwayat.css"


</head>
<body>
<div class="burger" id="burger">&#9776;</div> <!-- Hamburger Icon -->

<div class="sidebar" id="sidebar">
    <h2>Menu</h2>
    <a class="btn btn-danger ganti" href="index.php" role="button">Dashboard</a>
    <a class="btn btn-danger ganti" href="" role="button">Ganti Password</a>
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


<div class="tabel" class="form-container">

    <div class="welcome">
        <span>Riwayat Absen</span> <br>

    </div>
    <div class="mbot"></div>

    <!-- konten riwayat dimulai dari sini pul -->


    <div class="">
        <?php
        $no = 1;
        $sql = "SELECT * FROM data WHERE nrp='{$_SESSION['nrp']}'";
        $result = mysqli_query($mysql, $sql);

        ?>
            <div class="riwayat">

                <table style="width:100%">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['tanggal']; ?></td>
                        <td> - <?php echo $row['jam']; ?></td>
                    </tr>

                    <?php } ?>
                </table>


                <span class="underline"></span>

            </div>


    </div>

</div>

</div>
</body>
</html>


