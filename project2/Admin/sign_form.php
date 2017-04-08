<html>
 <body>
	<form method="POST" action="sign_up.php">
		<table align="center" cellpadding="10" bgcolor="lightblue">
			<caption><hr>SIGN UP</hr><caption>
			<tr>
				<th>Name:</th>
				<td><input type="text" name="fname"></td>
			</tr>
			<tr>
					 <th>EMAIL:</th>
					 <td>
					  <input type="text" name="email"><br><br>
					 </td>
				   </tr>
				   <tr>
					 <th>PASSWORD:</th>
					 <td>
					  <input type="text" name="pass"><br><br>
					 </td>
				   </tr>
				   <tr>
					 <th>MOBILE:</th>
					 <td>
					  <input type="text" name="mobile"><br><br>
					 </td>
				   </tr>
				   <tr><th>city</th>
					  <td>
						<select name="city" >
						  <option value="">choose city</option>
						   <option value="">banglore</option>
						 <option value="">t.n</option>
						  <option value="">u.p</option>
						</select>
						</td>
				   <tr>
					 <th>ADDRESS:</th>
					 <td>
					  <textarea rows="5" cols="30" name="address"></textarea><br><br>
					 </td>
				   </tr>
				   <tr>
						<th>Gender</th>
						<td>
						  <input type="radio"  name="gender"  value="male" >Male
						<input type="radio"  name="gender"  value="female" >feMale<br>
						</td>
						
					</tr>
				   
				   <tr>
					
					 <td colspan="8" align="center">
					  <input type="submit" value="SIGN UP">
					 </td>
				   </tr>
		</table>
	</form>
</body>
</html>