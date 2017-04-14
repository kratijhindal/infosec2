<?php
	include("dbconfig.php");
	
	$aminities = $_POST['aminities'];
	
 $sql = "insert into aminities(aminities)values('$aminities')";
	mysqli_query($conn,$sql);
	echo "inserted";
?>