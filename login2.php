<?php
include 'config.php';

  $username = $_POST['id_admin'];
  $password = $_POST['password'];

  $connect = mysqli_connect("127.0.0.1", "root", "", "tubes_dpw");
  $login = ("SELECT * FROM admin WHERE id_admin='$username' AND password='$password'");
  $result = mysqli_query($connect, $login);
  $cek = mysqli_num_rows($result);

  if ($cek>0){
    session_start();
    $_SESSION['id_admin'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin.php");
  } else{
    header("location:LoginForm.html");
  }
  ?>