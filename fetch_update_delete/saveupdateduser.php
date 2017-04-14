<?php
  include ("db_config.php");
  $name=$_POST['name'];
	//echo $name;
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	
	$address = $_POST['address'];
	$id = $_POST['uid'];
	$photo = $_FILES['file1']['name'];
	move_uploaded_file($_FILES['file1']['tmp_name'],'photos/'.$photo);
	$payment = $_POST['payment'];
	
	$sql="update details set name='$name',
	                          email='$email',mobile='$mobile',address='$address',photo='$photo' 
							  where id='$id'";
	       
	
	mysqli_query($conn,$sql);
	echo "data insertedo";
	header("Location:registrationlist1.php");
?>