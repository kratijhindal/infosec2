<?php
  include ("connect.php");
  $name=$_POST['name1'];
	//echo $name;
	
	$id = $_POST['id1'];
	$photo = $_FILES['photo1']['name'];
	move_uploaded_file($_FILES['photo1']['tmp_name'],'pictures/'.$photo);
	
 $sql="update today set uname='$name',
	                        upload_photo='$photo' 
							  where userid='$id'";
	       
	
	mysqli_query($conn,$sql);
	//echo "data insertedo";
	header("Location:list.php");
?>