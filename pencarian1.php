<!DOCTYPE html>
<html lang="en">
<head>
<title>OJEK WISATA JAVANICA</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap" align="center">
  <div class="header" align="center">
    <div></a></div>
    <div id="menu">
      <ul><center>
        <li class ="selected"><a href="index1.php">HOME</a></li>
      </ul></center>
    </div>
  </div>
  

<?php 
include "config.php";
$key = $_POST['cari'];
$QueryString = "SELECT * FROM paket_wisata WHERE id_wisata LIKE '%$key%' OR nama_wisata LIKE '%$key%' OR tgl_berangkat LIKE '%$key%' OR lokasi_wisata LIKE '%$key%' OR jenis_wisata LIKE '%$key%' OR tarif LIKE '%$key%'";
  $result = mysqli_query($mysqli,$QueryString); 
?>
<div class="center_content">
    <div class="left_content">
    <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Pencarian Data . . . . .</div>

<table id="table_id" border="10" align="center" width="800px">
        <thead align="center">
            <tr>
     <th>ID Wisata</th>
       <th>Nama Wisata</th>
       <th>Tanggal berangkat</th>
       <th>Lokasi Wisata</th>
       <th>Jenis Wisata</th>
       <th>Tarif</th>
    </tr>
        </thead>
        <tbody>
        <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
          echo "<td>".$user_data['id_wisata']."</td>";
        echo "<td>".$user_data['nama_wisata']."</td>";
        echo "<td>".$user_data['tgl_berangkat']."</td>";
        echo "<td>".$user_data['lokasi_wisata']."</td>";
        echo "<td>".$user_data['jenis_wisata']."</td>";
        echo "<td>".$user_data['tarif']."</td>";
          
    }
    ?>
    </tbody>
    </table>
</div>
</body>
</html>

   