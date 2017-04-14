<?php
	include('dbconfig.php');//cpi
	
     
	$payment = $_POST['payment'];
	$sql = "insert into payment(mode_of_payment)value('$payment')";
	mysqli_query($conn,$sql);
	echo "inserted . <br>";
?>