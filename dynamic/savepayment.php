<?php
	include("dbconfig.php");
	
	$payment = $_POST['payment'];
	
 $sql = "insert into payment(payment)values('$payment')";
	mysqli_query($conn,$sql);
	echo "inserted";
?>