<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id_costumer = $_GET['id_costumer'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM costumer WHERE id_costumer=$id_costumer");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>
