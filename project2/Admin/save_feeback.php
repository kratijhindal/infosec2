<?php
	include("db_config.php");
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$feedback = $_POST['feedback'];
	
	$sql = "insert into table_feedback(name,email,mobile,feedback)values('$name','$email','$mobile','$feedback')";
	mysqli_query($conn,$sql);
	echo "inserted";

?>