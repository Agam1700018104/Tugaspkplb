<!DOCTYPE html>
<html lang="en">

<head>
 <title>OJEK WISATA JAVANICA</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap" align="center">
  <div class="header" align="center">

    <div id="menu">
      <ul><center>
        <li class ="selected"><a href="index.php">TABEL  COSTUMER</a></li>
        <li class ="selected"><a href="index1.php">TABEL PEMINJAMAN</a></li>
        <li class ="selected"><a href="index2.php">TABEL MENU WISATA</a></li>
      </ul></center>
    </div>
  </div>
  <div class="center_content">
    <div class="left_content">

<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM paket_wisata");
?>

<id="cari">
        <form method="post" action="pencarian1.php">
          <input type="text" name="cari" />
          <input type="submit" name="kirim" value="cari data" />
        </form>
 
    <table id="table_id" border="5" align="center" width="850px">
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
    while ($user_data = mysqli_fetch_array($result)) {                 
        echo "<td>".$user_data['id_wisata']."</td>";
        echo "<td>".$user_data['nama_wisata']."</td>";
        echo "<td>".$user_data['tgl_berangkat']."</td>";
        echo "<td>".$user_data['lokasi_wisata']."</td>";
        echo "<td>".$user_data['jenis_wisata']."</td>";
        echo "<td>".$user_data['tarif']."</td>";

         echo "<td><a href='edit1.php?id_wisata=$user_data[id_wisata]'>Edit</a> | <a href='delete1.php?id_wisata=$user_data[id_wisata]'>Delete</a></td></tr>";        
    }
    ?>
    </tbody>
    </table>
    
  <form action="index1.php" method="post" name="form1" id="data">
      <div class="feat_prod_box_details">
        <div class="contact_form">
          <div class="form_subtitle">Menambahkan Data Paket Wisata</div>
          <form name="Add" href="">

      <tr> 
        <div class="form_row">
        <td><label class="contact"> <strong>ID Wisata</strong></label></td>
        <td><input type="text" class="contact_input" name="id_wisata"></td>
      </tr>
      <tr> 
        <div class="form_row">
        <td><label class="contact"> <strong>Nama Wisata</strong></label></td>
        <td><input type="text" class="contact_input" name="nama_wisata"></td>
      </tr>
      <tr> 
        <div class="form_row">
        <td><label class="contact"> <strong>Tanggal berangkat</strong></label></td>
        <td><input type="date" class="contact_input" name="tgl_berangkat"></td>
      </tr>
      <tr> 
        <div class="form_row">
        <td><label class="contact"> <strong>Lokasi Wisata</strong></label></td>
        <td><input type="text" class="contact_input" name="lokasi_wisata"></td>
      </tr>
      <tr> 
        <div class="form_row">
        <td><label class="contact"> <strong>Jenis Wisata</strong></label></td>
        <td><input type="text" class="contact_input" name="jenis_wisata"></td>
      </tr>
      <tr> 
        <div class="form_row">
        <td><label class="contact"> <strong>Tarif</strong></label></td>
        <td><input type="text" class="contact_input" name="tarif"></td>
      </tr>


      <tr> 
        <div class="form_row">
        <center><input type="submit" name="Submit" value="Tambahkan"></center>
      </div>
      </tr>
    </table>
  </form>

<center>
  <?php
  if(isset($_POST['Submit'])) {
    
    $id_wisata = $_POST['id_wisata'];
    $nama_wisata = $_POST['nama_wisata'];
    $tgl_berangkat = $_POST['tgl_berangkat'];
    $lokasi_wisata = $_POST['lokasi_wisata'];
    $jenis_wisata = $_POST['jenis_wisata'];
    $tarif = $_POST['tarif'];
  

    include_once("config.php");

    $result = mysqli_query($mysqli, "INSERT INTO paket_wisata(id_wisata,nama_wisata,tgl_berangkat,lokasi_wisata,jenis_wisata,tarif) VALUES('$id_wisata','$nama_wisata','$tgl_berangkat','$lokasi_wisata','$jenis_wisata','$tarif')");
    
    echo "<a href='index1.php'>Tampilkan Paket Wisata</a>";
  }
  ?>
</center>

  </body>



</html>
