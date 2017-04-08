<?php
	include("db_config.php");
	
	$pname = $_POST['pname'];//$name(variable name) = $_POST['fname'(textbox_name)] in values '$name'(variable name)
	$bname = $_POST['bname'];
	
	$sql = "insert into tableproduct(product,brand)values('$pname','$bname')";
	
	 mysqli_query($conn,$sql);
		echo "inserted";
	
	
	
	
	
	
	
	
	
	
	
?>