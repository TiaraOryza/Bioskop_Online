<?php
include "config.php";

$kode_bangku = $_GET['kode_bangku'];
$kode_ruangan = $_GET['kode_ruangan'];
$nama_ruangan = $_GET['nama_ruangan'];

$connect = mysqli_connect("127.0.0.1", "root", "", "tubes_dpw");
  $sql = ("INSERT INTO bangku (kode_bangku, kode_ruangan, nama_ruangan)
            VALUES ('$kode_bangku', '$kode_ruangan', '$nama_ruangan')");

  $result = mysqli_query($connect, $sql);

  if($result){
    echo "Data berhasil ditambahkan";
}
else {
    echo "Data gagal ditambahkan" . mysqli_error($connect);
}
?>
<br><br>
<tr>
<a href="admin.php"> Lihat data </a>
</tr>