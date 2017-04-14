<?php
	include('dbconfig.php');//cpi
	
     
	
	$aminities = $_POST['aminities'];
	//echo $aminities;
	$sql = "insert into aminities(aminity)value('$aminities')";
	mysqli_query($conn,$sql);
    echo "insertd  .<br>";
	
	
?>