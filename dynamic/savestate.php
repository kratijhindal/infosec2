<?php
	include("dbconfig.php");
	
	$state = $_POST['state'];
	
 $sql = "insert into state(state)values('$state')";
	mysqli_query($conn,$sql);
	echo "inserted";
?>