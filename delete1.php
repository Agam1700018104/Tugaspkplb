<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id_wisata = $_GET['id_wisata'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM paket_wisata WHERE id_wisata=$id_wisata");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index1.php");
?>
