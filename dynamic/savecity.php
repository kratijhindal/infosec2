<?php
	include("dbconfig.php");
	
	$city = $_POST['city'];
	
 $sql = "insert into city(city)values('$city')";
	mysqli_query($conn,$sql);
	echo "inserted";
?>