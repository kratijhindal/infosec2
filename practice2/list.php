<html>
	<body>	
		<table align="center" cellspacing="10">
			<tr>
				<th>USER NAME</th>
				<th>USER PHOTO</th>
				<th>DELETE</th>
				<th>UPDATE</th>
			</tr>
			
				<?php
					include('connect.php');
					$sql="select * from today";
					$res=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($res)){
						echo "<tr>";
						echo "<td>".$row['uname']."</td>";
						//echo "<td>".$row['upload_photo']."</td>";
						echo "<td><img src='pictures/".$row['upload_photo']."' height='100px' width='100px'></td>";
						echo "<td><a href='delete.php?uid=".$row['userid']."'>delete</a></td>";
						echo "<td><a href='update.php?id=".$row['userid']."'>update</a></td>";
						echo "</tr>";
					}
				
				?>
			
		</table>
	</body>
</html>