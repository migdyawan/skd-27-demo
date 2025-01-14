<?php
include "../../database/db.php";
session_start();

if (isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $pw = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE nama = '$nama' AND password = '$pw' ";
    $result = mysqli_query($mysql, $sql);

    if ($result->num_rows > 0) {
        $data = mysqli_fetch_assoc($result);
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['role'] = $data['role'];



        header("Location:../../admin/index.php");
        exit();
    } else {
        $_SESSION['status'] =  "nrp atau password salah!";
        header("Location: ../../admin/login.php");
    }
}

?>