<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$kode_wisata = $_GET['kode_wisata'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM menu_wisata WHERE kode_wisata=$kode_wisata");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index2.php");
?>
