<?php
  include ("dbconfig.php");
  $newname=$_POST['name'];
  $newemail=$_POST['email'];
  $newmobile=$_POST['mobile'];
  $newmessage=$_POST['message'];
  $id=$_POST['id1'];
	//echo $name;
	
	//$id = $_POST['id1'];
	
  $sql="update contact set name='$newname',
	                        email='$newemail', 
							mobile='$newmobile',
							message='$newmessage'
							  where id='$id'";
	       
	
	 mysqli_query($conn,$sql);
	//echo "data insertedo";
	header("Location:contactlist.php");
?>