<html>
	<head>
		<title>File Upload</title>
	</head>
	<body>
		<form action="savephoto.php" method="POST" enctype="multipart/form-data">
			<table cellspacing="10" align="center" bgcolor="skycolor">
				<tr>
					<th>Choose file:</th>
					<td><input type="file" name="file1"></td>
					
				</tr>
				<tr>
					
					<td colspan="2" align="center">
					<input type="submit" name="sub" value="upload">
					</td>
					
				</tr>
			</table>
		</form>
		
	</body>
</html>