<?php
	include('connect.php');
	$del_id=$_REQUEST['uid'];
	$sql ="delete from today where userid='$del_id'";
	mysqli_query($conn,$sql);
	
	header('Location:list.php');
?>