<html>
	<body>
	 <form action="saveproduct.php" method="post" enctype="multipart/form-data">
		<table align="center" cellspacing="10">
			<tr>
				<th>product name</th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th>quantity</th>
				<td><input type="text" name="quantity"></td>
			</tr>
			<tr>
				<th>ingredients</th>
				<td><input type="checkbox" name="ingredient[]" value="choose">choose
				<input type="checkbox" name="ingredient[]" value="milk">milk
				<input type="checkbox" name="ingredient[]" value="suger">suger
				<input type="checkbox" name="ingredient[]" value="salt">salt
				<input type="checkbox" name="ingredient[]value="essence">essence</td>
			</tr>
			<tr>
				<th>photo</th>
				<td><input type="file" name="photo"></td>
			</tr>
			<tr>
				<th>feedback</th>
				<td><input type="text" name="feedback"></td>
			</tr>
			<tr>
				<td colspan="8" align="center"> 
					<input type="submit" value="submit">
					<input type="reset" value="clear">
				</td>
			</tr>
		<table>
	 </form>	
	</body>
</html>