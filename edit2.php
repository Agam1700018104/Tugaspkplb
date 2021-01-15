<!DOCTYPE html>
<html lang="en">
<head>
<title>OJEK WISATA </title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap" align="center">
  <div class="header" align="center">
    <div></a></div>
    <div id="menu">
      <ul><center>
        <li class ="selected"><a href="index2.php">BERANDA</a></li>
      </ul></center>
    </div>
  </div>

<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$kode_wisata=$_POST['kode_wisata'];
	$nama_wisata=$_POST['nama_wisata'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE kategori SET kode_wisata='$kode_wisata', nama_wisata='$nama_wisata', WHERE kode_wisata=$kode_wisata");
	
	// Redirect to homepage to display updated user in list
	header("Location: index2.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kode_wisata = $_GET['kode_wisata'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM menu_wisata WHERE kode_wisata=$kode_wisata");
 
while($user_data = mysqli_fetch_array($result))
{
	
	$kode_wisata = $user_data['kode_wisata'];
	$nama_wisata = $user_data['nama_wisata'];

}
?>
<html>
<head>
<div class="center_content">
 	<div class="left_content">
    <div class="title"><span class="title_icon"></span>Update Data Kategori</div>
<br><br>
	<form action="edit2.php" method="post" name="form1" id="data">
		<div class="feat_prod_box_details">
        <p class="details"> </p>
        <div class="contact_form">
        <div class="form_subtitle">Mengupdate Data Kategori</div>
        <form name="Update" href="">
        <div class="form_row">
		<input type="hidden" name="kode_wisata" value="<?php echo $kode_wisata; ?>">
			
			
			<tr> 
				<div class="form_row">
				<td><label class="contact"> <strong>KODE WISATA</strong></label></td>
				<td><input type="text" class="contact" name="kode_wisata" value="<?php echo $kode_wisata;?>"></td>
			</tr>
			<tr> 
				<div class="form_row">
				<td><label class="contact"> <strong>NAMA WISATA</strong></label></td>
				<td><input type="text" class="contact" name="nama_wisata" value="<?php echo $nama_wisata;?>"></td>
			</tr>
		
			<tr>	
				<td><input type="hidden" name="kode_wisata" value="<?php echo $_GET['kode_wisata'];?>"></td>
				
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
