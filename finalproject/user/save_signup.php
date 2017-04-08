<?php
	include ("dbconfig.php");
	
	$name=$_POST['name'];
	//echo $name;
	//echo "<br>";
	$address = $_POST['address'];
	//echo $address;
	//echo "<br>";
	$email = $_POST['email'];
	//echo "<br>";
	$gender = $_POST['gender'];
	//echo $gender;
	//echo "<br>";
	$password = $_POST['password'];
	//echo "<br>";
	$qualification = $_POST['qual'];
	
	$cpassword = $_POST['cpassword'];
	$language = implode(',' , $_POST['lang']);
	//echo $language;
	//echo "<br>";
	$mobile = $_POST['mobile'];
	$photo = $_FILES['file1']['name'];
		move_uploaded_file($_FILES['file1']['tmp_name'],'photos/'.$photo);
	$city = $_POST['city'];	
		
		$sql = "insert into signup(name,address,email,gender,password,qualification,confirm_password,language,mobile,photo,city)
		values('$name','$address','$email','$gender','$password','$qualification','$cpassword','$language','$mobile','$photo','$city')";
		mysqli_query($conn,$sql);
	     echo "data insertedo";
	
	
	
	
	
	
	
	
	
?>