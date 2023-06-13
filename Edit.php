<html>
<head>
<title>Edit Data</title>
</head>
<body>
<?php
include "config.php";
$connect = mysqli_connect("127.0.0.1", "root", "", "tubes_dpw");


$id = $_GET['kode_booking'];
$query = "SELECT * FROM booking WHERE kode_booking='$id'";
$result = mysqli_query($connect, $query);
?>
<table>
    <form method="GET" action="EditProses.php">
<?php
    while ($data=mysqli_fetch_array($result)){
    ?>

<tr>
    <td>Kode booking</td>
    <td><input type="number" name="kode_booking" value="<?php echo $data['kode_booking'];?>" readonly > </td>
</tr>
<tr>
    <td>Kode bangku</td>
    <td><input type="text/number" name="kode_bangku" value="<?php echo $data['kode_bangku'];?>" > </td>
</tr>
<tr>
    <td><input type="submit" name="submit" value="Edit Data"></td>
</tr>
<?php
    }
?>
</body>
</html>