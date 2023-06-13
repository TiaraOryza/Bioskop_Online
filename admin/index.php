<?php
include '../config.php';

session_start();

if ($_SESSION['status'] != "login"){
    header("location:../index.php");
}
echo "Hai, selamat datang " . $_SESSION['username'];

?>
<br>
<br>
<a href="logout.php">Logout</a>
<html>
    <body>
        akuuuuuuuuu
    </body>
    </html>