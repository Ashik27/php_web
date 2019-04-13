<?php
include("../includes/db.php");
header("location: about.php");

$delete_id = $_GET['del'];

$delete_query = "delete from about where id='$delete_id'";

if(mysqli_query($db,$delete_query)){

	echo "<script>alert('Deleted');</script>";
	}
	
	
	
?>