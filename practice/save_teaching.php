<?php
	include('dbconfig.php');//cpi
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$city=$_POST['city'];
	$photo=$_FILES['photo']['name'];
	 move_uploaded_file($_FILES['photo']['tmp_name'],'photos/'.$photo);
	$qual=$_POST['qual'];
	$sub=implode(',' ,$_POST['sub']);
	$board=$_POST['board'];
	$mode=$_POST['mode'];
	$exp=$_POST['exp'];
	
	$sql = "insert into teach(name,email,mobile,city,photo,qualification,subject,board,mode,experience)
	values('$name','$email','$mobile','$city','$photo','$qual','$sub','$board','$mode','$exp')";

	mysqli_query($conn,$sql);
	echo "inserted data in data base";
	header("Location:teachinglist.php");
?>