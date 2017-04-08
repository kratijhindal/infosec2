<?php
	//$conn = mysqli_connect("localhost","root","","project2");
	include("db_config.php");
	
	$ctgr = $_POST['ctgr'];
	//echo $ctgr;
	
	$sql = "insert into category(select_category)values('$ctgr')";
	mysqli_query($conn,$sql);
	echo "inserted";
	
?>