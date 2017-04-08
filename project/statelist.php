<html>
	<body>
		<table align="center" bgcolor="skyblue">
			<tr>
				<th>state name</th>
				<th> city name</th>
			</tr>
		<?php
		
		include("dbconfig.php");
		$sql="select * from state";
		$res = mysqli_query($conn,$sql);
		
		while($row = mysqli_fetch_array($res))
		{
			echo "<tr>";
			echo "<td>".$row['state']."</td>";
			echo "<td>".$row['city']."</td>";
			echo "</tr>";
		}
			
		?>		
		</table>
	</body>
<html>