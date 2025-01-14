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
    <link rel="stylesheet" type="text/css" href="../css/custom_pass.css"


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


<div class="form-container">

    <div class="welcome">
        <span>Ganti Password</span> <br>

    </div>
    <div class="mbot"></div>

    <div class="mb-3">
        <?php
        if (isset($_SESSION['status'])) { ?>

            <p class="status-alert">
                <?php echo $_SESSION['status']; ?>
            </p>

        <?php unset($_SESSION['status']); } ?>
        <div class="form-group">
            <span class="form-control" >

            </span>
        </div>
    </div>
    <form action="../controller/controller_login.php" method="post" class="">
        <?php
        $sql = "SELECT * FROM user WHERE nrp='{$_SESSION['nrp']}'";
        $result = mysqli_query($mysql, $sql);


        while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <div class="mb-3">
            <div class="form-group">
                <input class="form-control" name="password" placeholder="password" value="<?php  echo $row['password']; ?>" required="" type="text" >
            </div>
        </div>

        <div class="mb-3">
            <div class="form-group">
                <input class="form-control" name="password2" placeholder="Ketik ulang password" value="<?php  echo $row['password']; ?>" required="" type="text" >
            </div>
        </div>
        <?php } ?>

        <button class="absen btn btn-primary button-login  rounded" type="submit" name="ganti">kirim</button>

    </form>

</div>

</div>
</body>
</html>


