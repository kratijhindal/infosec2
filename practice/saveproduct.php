<?php
	include('dbconfig.php');//cpi
	
	$name=$_POST['name'];
	//echo $name;
	$quantity=$_POST['quantity'];
	$ingredient=implode(',' ,$_POST['ingredient']);
	$photo=$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],'photos/'.$photo);
	$feedback=$_POST['feedback'];
	
	$sql = "insert into product_table(name,quantity,ingredients,photo,feedback)values('$name','$quantity','$ingredient','$photo','$feedback')";
     mysqli_query($conn,$sql);
	 echo "inserted";
	header('Location:productlist.php');
	?>