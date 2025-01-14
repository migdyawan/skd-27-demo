<?php
include "../database/db.php";
session_start();

if (isset($_POST['submit'])){

    $nrp = $_POST['nrp'];
    $pw = $_POST['password'];

    $sql = "SELECT * FROM user WHERE nrp = '$nrp' AND password = '$pw' ";
    $result = mysqli_query($mysql, $sql);

    if ($result->num_rows > 0) {
        $data = mysqli_fetch_assoc($result);
        $_SESSION['nrp'] = $data['nrp'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['pangkat'] = $data['pangkat'];
        $_SESSION['system'] = $data['system'];
        $_SESSION['flight'] = $data['flight'];
        $_SESSION['password'] = $data['password'];
        header("Location:../menu/index.php");
        exit();
    } else {
        $_SESSION['status'] =  "nrp atau password salah!";
        header("Location: ../index.php");
    }
}

if (isset($_POST['ganti'])){

    $pass = $_POST['password'];
    $pass2 = $_POST['password2'];




    if ($pass!=$pass2){
        $_SESSION['status'] =  "password tidak sama!";
        header("Location: ../menu/ganti_password.php");
        exit();
    } elseif (isset($_POST['ganti'])){
        $sql = "UPDATE user SET password = '$pass' WHERE nrp='{$_SESSION['nrp']}'";
        $result = mysqli_query($mysql, $sql);

        if ($result) {
            header("Location:../menu/index.php");
        } else {
            $_SESSION['status'] =  "gagal ganti password!";
            header("Location: ../menu/ganti_password.php");
        }

    }




}



?>