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
        <li class ="selected"><a href="index2.php">HOME</a></li>
      </ul></center>
    </div>
  </div>
  

<?php 
include "config.php";
$key = $_POST['cari'];
$QueryString = "SELECT * FROM menu_wisata WHERE kode_wisata LIKE '%$key%' OR nama_wisata LIKE '%$key%' ";
    $result = mysqli_query($mysqli,$QueryString); 
?>
<div class="center_content">
    <div class="left_content">
    <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Pencarian Data . . . . .</div>

<table id="table_id" border="10" align="center" width="800px">
        <thead align="center">
            <tr>
       <th>KODE WISATA</th>
       <th>NAMA WISATA</th>
    </tr>
        </thead>
        <tbody>
        <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
         echo "<td>".$user_data['kode_wisata']."</td>";
         echo "<td>".$user_data['nama_wisata']."</td>";
        }
    ?>
    </tbody>
    </table>
</div>
</body>
</html>