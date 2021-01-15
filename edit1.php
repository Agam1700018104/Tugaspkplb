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
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id_wisata = $_POST['id_wisata'];
    $nama_wisata = $_POST['nama_wisata'];
    $tgl_berangkat = $_POST['tgl_berangkat'];
    $lokasi_wisata = $_POST['lokasi_wisata'];
    $jenis_wisata = $_POST['jenis_wisata'];
    $tarif = $_POST['tarif'];
  
	// update user data
	$result = mysqli_query($mysqli, "UPDATE paket_wisata SET id_wisata='$id_wisata',nama_wisata='$nama_wisata',tgl_berangkat='$tgl_berangkat',lokasi_wisata='$lokasi_wisata',jenis_wisata='$jenis_wisata',tarif='tarif' WHERE id_wisata=$id_wisata");
	
	// Redirect to homepage to display updated user in list
	header("Location: index1.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_wisata= $_GET['id_wisata'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM paket_wisata WHERE id_wisata=$id_wisata");
 
while($user_data = mysqli_fetch_array($result))
{
	
	$id_wisata = $user_data['id_wisata'];
    $nama_wisata = $user_data['nama_wisata'];
    $tgl_berangkat = $user_data['tgl_berangkat'];
    $lokasi_wisata = $user_data['lokasi_wisata'];
    $jenis_wisata = $user_data['jenis_wisata'];
    $tarif = $user_data['tarif'];
}
?>
<html>
<head>
<div class="center_content">
 	<div class="left_content">
    <div class="title"><span class="title_icon"></span>Update Data Paket Wisata</div>
<br><br>
	<form action="edit1.php" method="post" name="form1" id="data">
		<div class="feat_prod_box_details">
        <p class="details"> </p>
        <div class="contact_form">
        <div class="form_subtitle">Mengupdate Data Paket Wisata</div>
        <form name="Update" href="">
        <div class="form_row">
		<input type="hidden" name="id_wisata" value="<?php echo $id_wisata; ?>">
			
			
			<tr> 
				<div class="form_row">
				<td><label class="contact"> <strong>ID Wisata</strong></label></td>
				<td><input type="text" class="contact" name="id_wisata" value="<?php echo $id_wisata;?>"></td>
			</tr>
			<tr> 
				<div class="form_row">
				<td><label class="contact"> <strong>Nama Wisata</strong></label></td>
				<td><input type="text" class="contact" name="nama_wisata" value="<?php echo $nama_wisata;?>"></td>
			</tr>
			<tr> 
				<div class="form_row">
				<td><label class="contact"> <strong>Tanggal Berangkat</strong></label></td>
				<td><input type="date" class="contact" name="tgl_berangkat" value="<?php echo $tgl_berangkat;?>"></td>
			</tr>
			<tr> 
				<div class="form_row">
				<td><label class="contact"> <strong>Lokasi Wisata</strong></label></td>
				<td><input type="text" class="contact" name="lokasi_wisata" value="<?php echo $lokasi_wisata;?>"></td>
			</tr>
			<tr> 
				<div class="form_row">
				<td><label class="contact"> <strong>Jenis Wisata</strong></label></td>
				<td><input type="text" class="contact" name="jenis_wisata" value="<?php echo $jenis_wisata;?>"></td>
			</tr>
			<tr> 
				<div class="form_row">
				<td><label class="contact"> <strong>Tarif</strong></label></td>
				<td><input type="text" class="contact" name="tarif" value="<?php echo $tarif;?>"></td>
			</tr>
			


			<tr>	
				<td><input type="hidden" name="id_wisata" value="<?php echo $_GET['id_wisata'];?>"></td>
				
			</tr>
			<td>&nbsp;</td>
			<td></td>
			<div class="form_row"><br>
			<td><center><input type="submit" name="update" value="Update"></td></center>
		</div>
	</div>
</form>
	</form>
</div></div></div></section>


</body>
</html>