<?php
	include("dbconfig.php");
	
/*(id  int(10) primary key auto_increment,
 name text(100),
 email varchar(210),
 mobile bigint(200),
 message text(1000)
);*/
	$name = $_POST['name'];
	//echo $name;
	$email = $_POST['email'];
	//echo $email;
	$mobile = $_POST['mobile'];
	//echo $mobile;
	$message = $_POST['message'];
	//echo $message;
	
	$sql = "insert into contact(name,email,mobile,message)values('$name','$email','$mobile','$message')";
	mysqli_query($conn,$sql);
	echo "Data inserted Successfully";
	
	
	
	
?>