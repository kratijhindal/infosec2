<?php
  include ("db_config.php");
  $name=$_POST['newname'];
	//echo $name;
	$email = $_POST['newemail'];
	$mobile = $_POST['newmobile'];
	
	$address = $_POST['newaddress'];
	$id = $_POST['uid'];
	$photo = $_FILES['file1']['name'];
	move_uploaded_file($_FILES['file1']['tmp_name'],'photos/'.$photo);
	$payment = $_POST['payment'];
	
	echo $sql="update details set name='$name',
	                          email='$email',mobile='$mobile',address='$address',photo='$photo' 
							  where id='$id'";
	       
	
	mysqli_query($conn,$sql);
	echo "data insertedo";
	header("Location:registrationlist1.php");
?>