<?php
include "config.php";

$idmem = $_GET['username'];
$film = $_GET['film'];
$ruangan = $_GET['ruangan'];
$bangku = $_GET['bangku'];
$tayang = $_GET['tayang'];
$tanggal = $_GET['tanggal'];
$bayar = $_GET['bayar'];

$connect = mysqli_connect("127.0.0.1", "root", "", "tubes_dpw");
  $sql = ("INSERT INTO booking (id_member, film, ruangan, kode_bangku, jam_tayang, tanggal_booking, metode_bayar)
            VALUES ('$idmem', '$film', '$ruangan', '$bangku', '$tayang', '$tanggal', '$bayar')");

  $result = mysqli_query($connect, $sql);

  if(mysqli_query($connect, $sql)){
    echo "Anda berhasil booking<br><br><br>";
    echo "===========================<br>";
    echo "----------STRUK BOOKING--------<br>";
    echo "===========================<br>";
    echo "Username : ";
    echo $idmem;
    echo "<br>---------------------------------------------";
    echo "<br>Nama Film : ";
    echo $film;
    echo "<br>---------------------------------------------";
    echo "<br>Ruangan : ";
    echo $ruangan;
    echo "<br>---------------------------------------------";
    echo "<br>Kode Bangku : ";
    echo $bangku;
    echo "<br>---------------------------------------------";
    echo "<br>Jam Tayang : ";
    echo $tayang;
    echo "<br>---------------------------------------------";
    echo "<br>Tanggal Booking : ";
    echo $tanggal;
    echo "<br>---------------------------------------------";
    echo "<br>Metode Bayar : ";
    echo $bayar;
    echo "<br>===========================";
}
else {
    echo "Anda gagal booking, silahkan cek lagi<br><br>" . mysqli_error($connect);
}

  ?>
  <br>
  <br>
  <a href="halaman1.html"><font color="blue">kembali</font></a>
