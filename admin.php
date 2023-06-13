<html>
<body>
<head>
 <title>Data TGV cinemas</title>
 <link rel="stylesheet" type="text/css" href="admin.css"/>
 </head>

 <?php
include 'config.php';

$connect = mysqli_connect("127.0.0.1", "root", "", "tubes_dpw");
if ($connect){
    echo "koneksi anda berhasil";
} else {
    echo " koneksi anda gagal, silahkan coba lagi".mysqli_connect_error();
}
 ?>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    
    <a href="LoginForm.html"><font color="black">logout</font></a>

    <table border="1" cellpadding="0" cellspacing="0">
        <br><br><h2>Data Booking Member</h2>
        <tr>
            <th>Kode Booking</th>
            <th>ID Member</th>
            <th>Film</th>
            <th>Ruangan</th>
            <th>Kode Bangku</th>
            <th>Jam Tayang</th>
            <th>Tanggal Booking</th>
            <th>Metode Bayar</th>
        </tr>
  <?php
    $result = mysqli_query($connect , "SELECT * FROM booking");
        if(mysqli_num_rows($result)>0){
            
            while($data = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $data["kode_booking"];?></td>
                    <td><?php echo $data["id_member"];?></td>
                    <td><?php echo $data["film"];?></td>
                    <td><?php echo $data["ruangan"];?></td>
                    <td><?php echo $data["kode_bangku"];?></td>
                    <td><?php echo $data["jam_tayang"];?></td>
                    <td><?php echo $data["tanggal_booking"];?></td>
                    <td><?php echo $data["metode_bayar"];?></td>
            </tr>
            <td>
            <a href="Edit.php?kode_booking=<?php echo $data['kode_booking']; ?>"> Edit  </a>
            &nbsp; &nbsp;
            <a href="Delete.php?kode_booking=<?php echo $data['kode_booking']; ?>"> Hapus </a>
            </td>
            <?php }
            } ?>
            </table>
<br><br><br>
<br><br><h2>Data Member TGV</h2>
            <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>id_member</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
        </tr>

<?php
include 'config.php';

$connect = mysqli_connect("127.0.0.1", "root", "", "tubes_dpw");

 ?>
  <?php
    $sql = mysqli_query($connect,  "SELECT * FROM member");

        if(mysqli_num_rows($sql)>0){
            
            while($data = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $data["id_member"];?></td>
                    <td><?php echo $data["username"];?></td>
                    <td><?php echo $data["password"];?></td>
                    <td><?php echo $data["email"];?></td>
                    <td>
            &nbsp; &nbsp;
            <a href="DeleteMember.php?id_member=<?php echo $data['id_member']; ?>"> Hapus </a>
            </td>
            </tr>
            
            <?php }
            } ?>
            </table> 

            <br><br><br>
<br><br><h2>Data Bangku TGV</h2>
            <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>Kode Bangku</th>
            <th>Kode Ruangan</th>
            <th>Nama Ruangan</th>
        </tr>

<?php
include 'config.php';

$connect = mysqli_connect("127.0.0.1", "root", "", "tubes_dpw");

 ?>
  <?php
    $query = mysqli_query($connect,  "SELECT * FROM bangku ");

        if(mysqli_num_rows($query)>0){
            
            while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $data["kode_bangku"];?></td>
                    <td><?php echo $data["kode_ruangan"];?></td>
                    <td><?php echo $data["nama_ruangan"];?></td>
            </tr>
            <?php }
            } ?>
            
            <br>
            </table> 
            <h2>tambah data </h2>
            <form action="TambahBangku.php">  
            <tr>
                <td><label><font color="maroon"><b>Kode Bangku </b></font></label></td>
                <td><input type="text/number" name="kode_bangku"></td>                
            </tr>
            <br> <br>
            <tr>
                <td><label><font color="maroon"><b>Kode Ruangan  </b></font></label></td>
                <td><input type="text/number" name="kode_ruangan"></td>                
            </tr>  
            <br><br>        
            <tr>
                <td><label><font color="maroon"><b>Nama Ruangan  </b></font></label></td>
                <td><input type="text/number" name="nama_ruangan"></td>
            </tr>
            <br><br>
            <tr>                
                <tr><td><input type="submit" name="submit" value="tambah"></td></tr>
            </tr>
            </form>

        </body>
            </html>
                        

