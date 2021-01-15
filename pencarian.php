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
        <li class ="selected"><a href="index.php">HOME</a></li>
      </ul></center>
    </div>
  </div>
  

<?php 
include "config.php";
$key = $_POST['cari'];
$QueryString = "SELECT * FROM costumer WHERE id_costumer LIKE '%$key%' OR nama_costumer LIKE '%$key%' OR alamat LIKE '%$key%' ";
	$result = mysqli_query($mysqli,$QueryString); 
?>
<div class="center_content">
    <div class="left_content">
    <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Pencarian Data . . . . .</div>

<table id="table_id" border="10" align="center" width="800px">
        <thead align="center">
            <tr>
      <th>ID Costumer</th><th>Nama Costumer</th><th>Alamat</th><th>No HP</th>
    </tr>
        </thead>
        <tbody>
        <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
         echo "<td>".$user_data['id_costumer']."</td>";
         echo "<td>".$user_data['nama_costumer']."</td>";
          echo "<td>".$user_data['alamat']."</td>";
         echo "<td>".$user_data['noHP']."</td>";
          
    }
    ?>
    </tbody>
    </table>
</div>
</body>
</html>

   