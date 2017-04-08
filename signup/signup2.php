

<?php
	$conn = mysqli_connect("localhost","root","","sign");
		if($conn == true){
			echo "connected";
		}else{
			echo "not connected";
		}
		
	$name =$_POST['name'];
		//echo $name;
	$email =$_POST['email'];
		//echo $email;
	$pass =$_POST['pass'];
		//echo $pass;
	//include("connect.php");	
	
	
		$sql = "insert into form(name,email,password)values('$name','$email','$pass')";
		if (mysqli_query($conn,$sql) == true){
			echo "data inserted";
		}else{
			echo "not inserted";
		}
?>

<html>
	<body>
		<table cellspacing="10" align="center">
			<form method="POST" action="signup2.php">
				<tr>
					<th>Name</th>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<th>Password</th>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					
					<td colspan="4" align="center"><input type="submit" value="submit"></td>
				</tr>
			</form>
		</table>
	</body>
</html>