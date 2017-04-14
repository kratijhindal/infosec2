<html>
	<body>
	hello
	<table align="center" cellspacing="10">
			<tr>
				<th>
				city
				</th>
				<td>
				 <Select name="city">
						<?php
					include("dbconfig.php");
					$sql="select * from city";
					 $res=mysqli_query($conn,$sql);
					while($row =mysqli_fetch_array($res)){
						echo "<option value=".$row['id'].">".$row['city']."</option>";
						
					}
				 
				 ?>	
				 
				 </select>
				</td>
			</tr>
			
		</table>
	</body>
</html>