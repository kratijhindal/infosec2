<?php
//cpu
include('dbconfig.php');
$newd=$_POST['describe'];
$newimg=$_FILES['file1']['name'];
$newid =$_POST['id'];
	move_uploaded_file($_FILES['file1']['tmp_name'],'photos/'.$newimg);
 echo $sql="update portfolio set discription='$newd', 
                                  image='$newimg' 
								  where id='$newid'";  

	     
 mysqli_query($conn,$sql);
header('Location:portfoliolist.php');	
?>