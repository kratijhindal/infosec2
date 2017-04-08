<html>
	<body>
		<form method="POST" action="save_feeback.php">
			<table cellspacing="10" align="center" bgcolor="lightblue">
				<caption><h1>Feedback</h1></caption>
				<tr>
					<th>Name:</th>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<th>Email:</th>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<th>Mobile:</th>
					<td><input type="text" name="mobile"></td>
				</tr>
				<tr>
					<th>Feedback</th>
					<td>
						<textarea rows="5" cols="30" name="feedback"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="4" align="center"><input type="submit"  value="Send"></td>
				</tr>
			<table>
		</form>
	</body>
<html>