<?php
	include('connect.php');
	
	$name =$_POST['nam'];
    $file =$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],'pictures/'.$file);
	$sql = "insert into today(uname,upload_photo)values
	        ('$name','$file')";
	mysqli_query($conn,$sql);
	echo "inserted data into database";
	header('Location:list.php');
?>