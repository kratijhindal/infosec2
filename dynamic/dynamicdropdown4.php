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
				    $sql ="select * from payment";
					$res =mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($res)){
						echo "<input type='radio' name='payment' value=".$row['id'].">".$row['payment']."" ;
					}
				 	
				 
				 ?>
				</td>
			</tr>
			
		</table>
	</body>
</html>