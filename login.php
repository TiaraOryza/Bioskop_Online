<?php
include 'config.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $connect = mysqli_connect("127.0.0.1", "root", "", "tubes_dpw");
  $login = ("SELECT * FROM member WHERE username='$username' AND password='$password'");
  $result = mysqli_query($connect, $login);
  $cek = mysqli_num_rows($result);

  if ($cek>0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:booking2.html");
  } else{
    header("location:LoginForm2.html");
  }
  ?>