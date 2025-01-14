<?php
include "../../database/db.php";
session_start();


if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $pangkat = $_POST['pangkat'];
    $nrp = $_POST['nrp'];
    $flight = $_POST['flight'];
    $system = $_POST['system'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (id, nama, pangkat, nrp, password, system, flight) VALUES ('', '$nama', '$pangkat', '$nrp', '$password', '$system','$flight') ";
    $result = mysqli_query($mysql, $sql);

    if ($result) {
        header("location:../reg.php");
    }

}

?>