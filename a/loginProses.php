<?php
include "koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM member WHERE username='$username' and password='$password'";
$result=mysqli_query($connect, $query);
$cek=mysqli_num_rows($result);

if($cek){
    echo "Anda berhasil login, silahkan menuju "; ?>
    <a href="halaman1.html">Halaman HOME</a>
    <?php
}else {
    echo "Anda gagal login, silahkan ";?>
    <a href="loginForm.html">Login kembali</a>
    <?php
    echo mysqli_error($connect);
}
?>