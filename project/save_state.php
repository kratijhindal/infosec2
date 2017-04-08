<?php
	include("dbconfig.php");
	
	$state = $_POST['state'];
		$city = $_POST['city'];
		
		 $sql = "insert into state(state,city)values('$state','$city')";
		mysqli_query($conn,$sql);
		header("Location:statelist.php");
	//echo "inserted";
?>