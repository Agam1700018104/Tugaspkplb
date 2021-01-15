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
        <li class ="selected"><a href="index1.php">TABEL PAKET WISATA</a></li>
        <li class ="selected"><a href="index2.php">TABEL MENU WISATA</a></li>
      </ul></center>
    </div>
  </div>
  <div class="center_content">
    <div class="left_content">

<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM menu_wisata");
?>

<id="cari">
        <form method="post" action="pencarian2.php">
          <input type="text" name="cari" />
          <input type="submit" name="kirim" value="cari data" />
        </form>
 
    <table id="table_id" border="5" align="center" width="850px">
        <thead align="center">
            <tr>
       <th>KODE WISATA</th><th>NAMA WISATA</th>
        </thead>
        <tbody>

        <?php  
    while ($user_data = mysqli_fetch_array($result)) {                 
         echo "<td>".$user_data['kode_wisata']."</td>";
         echo "<td>".$user_data['nama_wisata']."</td>";
         
         echo "<td><a href='edit2.php?kode_wisata=$user_data[kode_wisata]'>Edit</a> | <a href='delete2.php?kode_wisata=$user_data[kode_wisata]'>Delete</a></td></tr>";        
    }
    ?>
    </tbody>
    </table>
    
  <form action="index2.php" method="post" name="form1" id="data">
      <div class="feat_prod_box_details">
        <div class="contact_form">
          <div class="form_subtitle">Menambahkan Data Wisata</div>
          <form name="Add" href="">

      <tr> 
        <div class="form_row">
        <td><label class="contact"> <strong>KODE WISATA</strong></label></td>
        <td><input type="text" class="contact_input" name="kode_wisata"></td>
      </tr>
      <tr> 
        <div class="form_row">
        <td><label class="contact"> <strong>NAMA WISATA</strong></label></td>
        <td><input type="text" class="contact_input" name="nama_wisata"></td>
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
    
    $kode_wisata = $_POST['kode_wisata'];
    $nama_wisata = $_POST['nama_wisata'];

    include_once("config.php");

    $result = mysqli_query($mysqli, "INSERT INTO menu_wisata(kode_wisata, nama_wisata) VALUES('$kode_wisata', '$nama_wisata')");
    
    echo "<a href='index2.php'>Tampilkan Menu Wisata</a>";
  }
  ?>
</center>

  </body>



</html>
