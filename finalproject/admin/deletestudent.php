
<?php
	include('dbconfig.php');
	$delid=$_REQUEST['uid'];
	$sql="delete from signup where id='$delid'";
	echo mysqli_query($conn,$sql);
	header('Location:signuplist.php');
?>