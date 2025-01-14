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

    <form action="../function/config/config_log_admin.php" method="post" class="card  rounded p-4 p-sm-3">
        <div class="mb-3">
            <label for="nrp">username</label>
            <input name="nama" type="text" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="ss" for="nrp">password</label>
            <input name="password" type="password" class="form-control" required>
        </div>
        <button class="btn btn-primary button-login  rounded" type="submit" name="submit">masuk</button>
    </form>
</div>
</body>
</html>