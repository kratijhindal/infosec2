<?php
	
		
		$conn = mysqli_connect("localhost","root","","sign");
		if($conn == true){
			echo "connected";
		}else{
			echo "not connected";
		}
		
		$sql = "insert into form(name,email,password)values('$name','$email','$pass')";
		if (mysqli_query($conn,$sql) == true){
			echo "data inserted";
		}else{
			echo "not inserted";
		}
?>
