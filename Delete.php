<?php
include 'config.php';
$connect = mysqli_connect("127.0.0.1", "root", "", "tubes_dpw");

$id = $_GET['kode_booking'];

$query = "DELETE FROM booking WHERE kode_booking='$id'";
$result = mysqli_query($connect,$query);

if($result){
    echo "Data berhasil dihapus";
}
else {
    echo "Data gagal dihapus" . mysqli_error($connect);
}
?>
<br><br>
<tr>
<a href="admin.php"> Lihat data </a>
</tr>