<?php
session_start();

if (isset($_SESSION['nama'])){
    session_unset();
    session_destroy();
    header("Location:../../admin/login.php");
}

?>