<?php
	include('dbconfig.php');//cpi
	
     
	$city = $_POST['city'];
	$sql = "insert into city(cityname) value('$city')";
	mysqli_query($conn,$sql);
    echo "insertd  .<br>";
	
	
?>