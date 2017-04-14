<?php
//cpi
	include('dbconfig.php');
	
	$id= $_REQUEST['id'];
	
	$sql = "delete from product_table where id='$id'";
	mysqli_query($conn,$sql);
	
	header("Location:productlist.php");
?>