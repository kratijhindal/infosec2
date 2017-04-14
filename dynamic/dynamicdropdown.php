<html>
	<body>
	hello
	<table align="center" cellspacing="10">
			<tr>
				<th>
				State
				</th>
				<td>
				 <Select name="state">
						<?php
					include("dbconfig.php");
					$sql="select * from state";
					 $res=mysqli_query($conn,$sql);
					while($row =mysqli_fetch_array($res)){
						echo "<option value=".$row['id'].">".$row['state']."</option>";
						
					}
				 
				 ?>	
				 
				 </select>
				</td>
			</tr>
			
		</table>
	</body>
</html>