<?php
    include "../database/db.php";
    session_start();

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nrp = $_POST['nrp'];
        $pangkat = $_POST['pangkat'];
        $system = $_POST['system'];
        $flight = $_POST['flight'];
        $tanggal = $_POST['tanggal'];

        $sql = "INSERT INTO data(id, nama, pangkat, nrp, system, flight, tanggal) VALUES ('','$nama','$pangkat','$nrp','$system','$flight','$tanggal')";
        $result = mysqli_query($mysql, $sql);

        if ($result) {
            header("location:../menu/index.php");
        }

    }
?>
