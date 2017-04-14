<?php
	include('dbconfig.php');//cpi
	
     $state = $_POST['state'];
	$sql="insert into state(statename) values('$state')";
	mysqli_query($conn,$sql);
    echo "insertd .<br>";
	
	
?>