<?php
	include("db_config.php");
	
	//echo "delete code will be written here.";
	
	$id=$_REQUEST['id'];//GETTING THE ID OF THE PARTICULAR USER WHICH IS PASSED IN URL.
	//echo $id;
	
	$sql="delete from details where id='$id'";
	mysqli_query($conn,$sql);
	
	header("Location:registrationlist1.php");
?>