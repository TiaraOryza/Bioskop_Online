<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tubes_dpw";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if ($connect){
        echo "koneksi anda berhasil";
    } else {
        echo " koneksi anda gagal, silahkan coba lagi".mysqli_connect_error();
    }
?>