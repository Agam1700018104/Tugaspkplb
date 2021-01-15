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
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id_costumer = $_POST['id_costumer'];
    $nama_costumer = $_POST['nama_costumer'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE costumer SET id_costumer='$id_costumer',nama_costumer='$nama_costumer',alamat='$alamat', noHP='$noHP' WHERE id_costumer=$id_costumer");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_costumer = $_GET['id_costumer'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM costumer WHERE id_costumer=$id_costumer");
 
while($user_data = mysqli_fetch_array($result))
{
	
	$id_costumer = $user_data['id_costumer'];
    $nama_costumer = $user_data['nama_costumer'];
    $alamat = $user_data['alamat'];
    $noHP = $user_data['noHP'];
}
?>
<html>
<head>
<div class="center_content">
 	<div class="left_content">
    <div class="title"><span class="title_icon"></span>Update Data Pemesanan</div>
<br><br>
	<form action="edit.php" method="post" name="form1" id="data">
		<div class="feat_prod_box_details">
        <p class="details"> </p>
        <div class="contact_form">
        <div class="form_subtitle">Mengupdate Data Pemesanan</div>
        <form name="Update" href="">
        <div class="form_row">
		<input type="hidden" name="id_costumer" value="<?php echo $id_costumer; ?>">
			
			
			<tr> 
				<div class="form_row">
				<td><label class="contact"> <strong>ID COSTUMER</strong></label></td>
				<td><input type="text" class="contact" name="id_costumer" value="<?php echo $id_costumer;?>"></td>
			</tr>
			<tr> 
				<div class="form_row">
				<td><label class="contact"> <strong>NAMA COSTUMER</strong></label></td>
				<td><input type="text" class="contact" name="nama_costumer" value="<?php echo $nama_costumer;?>"></td>
			</tr>
			<tr> 
				<div class="form_row">
				<td><label class="contact"> <strong>ALAMAT</strong></label></td>
				<td><input type="text" class="contact" name="alamat" value="<?php echo $alamat;?>"></td>
			</tr>
			<tr> 
				<div class="form_row">
				<td><label class="contact"> <strong>NO HP</strong></label></td>
				<td><input type="text" class="contact" name="noHP" value="<?php echo $noHP;?>"></td>
			</tr>

			<tr>	
				<td><input type="hidden" name="id_costumer" value="<?php echo $_GET['id_costumer'];?>"></td>
				
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
