<?php
include "database/db.php";
session_start();

?>


<html>
    <div class="dekor"><h1></h1></div>
    <head>
        <meta name="viewport" content="width=device-width, initiak-scale=1">

        <link rel="stylesheet" type="text/css" href="css/custom_login.css"
        <html><head>
            <title>
                Login Page
            </title>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        </head>
        <body>

        <div class="form-container">
            <img alt="Logo with number 27, a dragon, and text 'SKADRON UDARA 27'" height="150" src="image/logo_home.png" width="150">
            <form action="controller/controller_login.php" class="rounded p-4 p-sm-3" method="post">
                <div class="judul">
                    <h1>
                        LOGIN
                    </h1>
                </div>
                <div class="mb-3">
                    <label for="nrp">
                    </label>
                    <input class="form-control" name="nrp" placeholder="NRP" required="" type="text";">
                    <div class="icon">
                        <i class="fas fa-user">
                        </i>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password">
                    </label>
                    <input class="form-control" name="password" placeholder="PASSWORD" required="" type="password" >
                    <div class="icon">
                        <i class="fas fa-lock">
                        </i>
                    </div>
                </div>
                <button class="btn btn-primary button-login rounded" name="submit" type="submit">
                    Sign In
                </button>
            </form>
        </div>

        </body></html>
</html>