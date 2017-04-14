<?php
	include('dbconfig.php');
	$newname=$_POST['name'];
	//echo $newname;
	$newemail=$_POST['email'];
	$newpassword=$_POST['password'];
	$newcpass=$_POST['cpassword'];
	$newmobile=$_POST['mobile'];
	$newcity=$_POST['city'];
	$newaddress=$_POST['address'];
	$newphoto=$_FILES['file1']['name'];
		move_uploaded_file($_FILES['file1']['tmp_name'],'photos/'.$newphoto);
	$id=$_POST['myid'];
	
	$sql ="update signup set name='$newname',
                               email='$newemail',password='$newpassword',confirm_password='$newcpass',mobile='$newmobile',
							    city='$newcity',address='$newaddress',photo='$newphoto' where id='$id'";
	mysqli_query($conn,$sql);
	header('Location:signuplist.php');
	
?>