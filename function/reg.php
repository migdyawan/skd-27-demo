<?php
include "../database/db.php";
session_start();




?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initiak-scale=1">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"
    <link rel="stylesheet" type="text/css" href="../css/custom.css"
</head>
<body>
<div class="full-width-log d-flex justify-content-center and align-items-center">

    <form action="config/config_reg.php" method="post" class=" rounded p-4 p-sm-3">
        <div class="mb-3">
            <label for="nrp">Masukan nama</label>
            <input name="nama" type="text" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="ss" for="nrp">Masukan pangkat</label>
            <input name="pangkat" type="text" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="ss" for="nrp">Masukan nrp</label>
            <input name="nrp" type="text" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="ss" for="nrp">Masukan system</label>
            <input name="system" type="text" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="ss" for="nrp">Masukan flight</label>
            <input name="flight" type="text" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="ss" for="nrp">Masukan password</label>
            <input name="password" type="password" class="form-control" required>
        </div>
        <button class="btn btn-primary button-login  rounded" type="submit" name="submit">tambah</button>
    </form>
</div>
</body>
</html>
