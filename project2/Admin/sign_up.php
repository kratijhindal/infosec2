<?php
	//signup table ,project2

//connect post insert=cpi
	include("db_config.php");
	$name = $_POST['fname'];//$name(variable name) = $_POST['fname'(textbox_name)] in values '$name'(variable name)
	
	$email = $_POST['email'];
	
	$pass = $_POST['pass'];
	
	$mobile = $_POST['mobile'];
	
	$city = $_POST['city'];
	
	$address = $_POST['address'];
	
	$gender = $_POST['gender'];
	
	
	$sql = "insert into signup1(name,email,password,mobile,city,address,gender)values('$name','$email','$pass','$mobile','$city','$address','$gender')";
	/*if (mysqli_query($conn,$sql)){
		echo "inserted";
	}else{
		echo "retry";
	}*/
	
	mysqli_query($conn,$sql);
	echo "inserted";
?>
	
	