<html>
	<head>
		Dynamic checkbox
	</head>
	<body>
	hello
	<table align="center" cellspacing="10">
			<tr>
				<th>
				Aminities
				</th>
				<td>
				<?php
					include("dbconfig.php");
				    $sql ="select * from aminities";
					$res =mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($res)){
						echo "<input type='checkbox' name='aminities[]' value=".$row['id'].">".$row['aminities']."" ;
					}
				 	
				 
				 ?>
				</td>
			</tr>
			
		</table>
	</body>
</html>