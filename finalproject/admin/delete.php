
<?php
	//crid
include('dbconfig.php');

$id=$_REQUEST['uid'];
$sql = "delete from contact where id='$id'";

    mysqli_query($conn,$sql);

  header('Location:contactlist.php');
?>