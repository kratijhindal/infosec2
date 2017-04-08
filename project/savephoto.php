<?php
	include("dbconfig.php");
	
	$photoname = $_FILES['file1']['name'];
	//echo $photoname;
	//echo "</br>";
	//$phototype = $_FILES['file1']['type'];
	//echo $phototype;
	//echo "</br>";
	//$photosize = $_FILES['file1']['size'];
	//echo $photosize;
	//echo "</br>";
	
	//moving the uploaded file in to temporary folder -photo.
	move_uploaded_file($_FILES['file1']['tmp_name'],'photos/'.$photoname);//tmp_name=predefine
	
	$sql = "insert into photo(photoname)values('$photoname')";
	mysqli_query($conn,$sql);
	echo "photo uploaded";
?>