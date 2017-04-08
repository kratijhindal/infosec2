<html>
	<head>
		<title>Multi check box</title>
	</head>
	
	<body>
	<form action="savecheck.php" method="POST">
		Hobby:<br><input type="checkbox" name="hobby[]" value="reading" >Reading<br>
					<input type="checkbox" name="hobby[]" value="writing">Writing<br>
					<input type="checkbox" name="hobby[]" value="dacing">Dancing<br>
					<input type="checkbox" name="hobby[]" value="dacing">Swiming<br>
					<input type="checkbox" name="hobby[]" value="dacing">Swinging<br>
				<input type="submit" value="save hobby" name="submit">	
	</body>
	</form>
</html>