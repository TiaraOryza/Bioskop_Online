<html>
    <head>
        <title>DAFTAR</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <script src="jquery-3.6.0.min.js"></script>
        <script>
            $(function(){
                $("#jQuery_accordion").accordion();
            });
        </script> 
    </head>
    <body>

    <div class="top-banner">
    <div class="banner-wrapper">
            <a href="https://www.cgv.id/en/movies/info/21009100/" rel="nofollow" onclick="_gaq.push(['_trackEvent', 'banner', 'click', 'F9 Top']);" target="_blank">
            <img src="https://cdn.cgv.id/uploads/marketing/2106/BN202106152119296365.jpg" onload="_gaq.push(['_trackEvent', 'banner', 'impression', 'F9 Top']);">
        </a>
    </div>
        </div>

    <?php
include "config.php";

$username = $_GET['uname'];
$password = $_GET['pw'];
$email = $_GET['email'];

$connect = mysqli_connect("127.0.0.1", "root", "", "tubes_dpw");
$sql = ("INSERT INTO member (username , password, email)
VALUES('$username', '$password', '$email')");

$result = mysqli_query($connect, $sql);

if(mysqli_query($connect, $sql)){
    echo "<br><br><br><font size=7 color=white> Anda berhasil melakukan pendaftaran, silahkan klik lanjutkan</font>"; 
    $sql=("SELECT * FROM member where id_member='$username'");
    $result = mysqli_query($connect, $sql);
}
else {
    echo "<font size=7 color=white> Data gagal ditambahkan <br></font>" . mysqli_error($connect);
    header("location:Daftar.html");
}

mysqli_close($connect);
?>   


<br>
<br>
<a href="Booking2.html" ><p align=center><font color="salmon" size=5>lanjutkan!</font></p></a>
    </body>
</html>

