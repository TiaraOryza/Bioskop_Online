<?php
include "config.php";
$connect = mysqli_connect("127.0.0.1", "root", "", "tubes_dpw");

$kode_booking = $_GET['kode_booking'];
$kode_bangku = $_GET['kode_bangku'];

$query = "UPDATE booking SET kode_bangku='$kode_bangku'
WHERE kode_booking='$kode_booking'";

$result = mysqli_query($connect, $query);

if ($result){
     echo "Berhasil update data";
}
else {
    echo "Gagal update data" . mysqli_error($connect);
}
?>
<br><br>
<a href="admin.php"> Kembali </a>