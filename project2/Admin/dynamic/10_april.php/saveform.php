<?php
	include('dbconfig.php');//cpi
	
     $state = $_POST['state'];
	$sql="insert into state(statename) values('$state')";
	mysqli_query($conn,$sql);
    echo "insertd .<br>";
	
	$city = $_POST['city'];
	$sql = "insert into city(cityname) value('$city')";
	mysqli_query($conn,$sql);
    echo "insertd  .<br>";
	
	$aminities = $_POST['aminities'];
	//echo $aminities;
	$sql = "insert into aminities(aminity)value('$aminities')";
	mysqli_query($conn,$sql);
    echo "insertd  .<br>";
	
	$payment = $_POST['payment'];
	$sql = "insert into payment(mode_of_payment)value('$payment')";
	mysqli_query($conn,$sql);
	echo "inserted . <br>";
?>