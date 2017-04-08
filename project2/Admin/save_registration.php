<?php
 include("db_config.php");
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $city = $_POST['city'];
 $address = $_POST['address'];
 $qual = $_POST['qual'];
 $sub = $_POST['sub'];
 $board = $_POST['board'];
 $teaching = $_POST['teaching'];
 $exp = $_POST['exp'];
 
 $sql = "insert into teaching(name,email,mobile,city,address,qualification,subject,board,teaching,experience)
 values('$name','$email','$mobile','$city','$address','$qual','$sub','$board','$teaching','$exp')";
 /*mysqli_query($conn,$sql);
 echo "data inserted";*/
 mysqli_query($conn,$sql);
	echo "inserted";
?>
