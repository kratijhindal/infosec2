<?php
	include('dbconfig.php');
	$del_id=$_REQUEST['uid'];
	echo $sql ="delete from portfolio where id='$del_id'";
	mysqli_query($conn,$sql);
	
	header('Location:portfoliolist.php');
?>