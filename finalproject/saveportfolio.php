<?php
//cpi cs cris cpu crib
	 include('dbconfig.php');
	 $des=$_POST['describe'];
	 //echo $des;
	 $photo=$_FILES['file1']['name'];
	  move_uploaded_file($_FILES['file1']['tmp_name'],'photos/'.$photo);
	  //echo $photo;
	   $sql="insert into portfolio(discription,image)values('$des','$photo')";
	  mysqli_query($conn,$sql);
	  echo "data inserted";
?>