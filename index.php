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
$result = mysqli_query($mysqli, "SELECT * FROM costumer");
?>

<id="cari">
        <form method="post" action="pencarian.php">
          <input type="text" name="cari" />
          <input type="submit" name="kirim" value="cari data" />
        </form>
 
    <table id="table_id" border="5" align="center" width="850px">
        <thead align="center">
            <tr>
       <th>ID COSTUMER</th><th>NAMA COSTUMER</th><th>ALAMAT</th><th>NO HANDPHONE</th>
    </tr>
        </thead>
        <tbody>

        <?php  
    while ($user_data = mysqli_fetch_array($result)) {                 
         echo "<td>".$user_data['id_costumer']."</td>";
         echo "<td>".$user_data['nama_costumer']."</td>";
          echo "<td>".$user_data['alamat']."</td>";
         echo "<td>".$user_data['noHP']."</td>";

         echo "<td><a href='edit.php?id_costumer=$user_data[id_costumer]'>Edit</a> | <a href='delete.php?id_costumer=$user_data[id_costumer]'>Delete</a></td></tr>";        
    }
    ?>
    </tbody>
    </table>
    
  <form action="index.php" method="post" name="form1" id="data">
      <div class="feat_prod_box_details">
        <div class="contact_form">
          <div class="form_subtitle">Menambahkan Data Costumer</div>
          <form name="Add" href="">

      <tr> 
        <div class="form_row">
        <td><label class="contact"> <strong>ID COSTUMER</strong></label></td>
        <td><input type="text" class="contact_input" name="id_costumer"></td>
      </tr>
      <tr> 
        <div class="form_row">
        <td><label class="contact"> <strong>NAMA COSTUMER</strong></label></td>
        <td><input type="text" class="contact_input" name="nama_costumer"></td>
      </tr>
      <tr> 
        <div class="form_row">
        <td><label class="contact"> <strong>ALAMAT</strong></label></td>
        <td><input type="text" class="contact_input" name="alamat"></td>
      </tr>
      <tr> 
        <div class="form_row">
        <td><label class="contact"> <strong>NO HP</strong></label></td>
        <td><input type="text" class="contact_input" name="noHP"></td>
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
    
    $id_costumer = $_POST['id_costumer'];
    $nama_costumer = $_POST['nama_costumer'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];
  

    include_once("config.php");

    $result = mysqli_query($mysqli, "INSERT INTO costumer(id_costumer, nama_costumer, alamat, noHP) VALUES('$id_costumer', '$nama_costumer','$alamat','$noHP')");
    
    echo "<a href='index.php'>Tampilkan costumer</a>";
  }
  ?>
</center>

  </body>



</html>
