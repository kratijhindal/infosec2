<?php
	include("dbconfig.php");
	$hobby = implode(',' , $_POST['hobby']);
	$sql = "insert into hobby(hobbyname)values('$hobby')";
	mysqli_query($conn,$sql);
	echo "inserted";
?>