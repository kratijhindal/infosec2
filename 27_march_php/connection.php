<?php
	$name= $_POST['name'] ;
	//echo "$name";
	$price =$_POST['price'] ;
	//echo "$price";
	$conn = mysqli_connect("localhost","root","","shop");
			if ($conn == true){
				echo "yes";
			}else{
				echo "no";
			}
	$sql = "insert into mytable(name,price)values('$name','$price')";
	if (mysqli_query($conn,$sql)){
		echo "inserted";
	}else{
		echo "retry";
	}
	
	
	
?>





<html>
<body>
	<form action="connection.php" method="POST">
		name: <input type="text" name="name"><br><br>
		price:<input type="number" name="price"><br><br>
		<input type="submit" value="submit">
	</form>
	<body>
</html>