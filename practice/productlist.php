<html>
	<body>
	 
		<table align="center" cellspacing="10">
			<tr>
				<th>name</th>
				<th>quantity</th>
				<th>ingedients</th>
				<th>photo</th>
				<th>feedback</th>
				<th>delete</th>
				<th>update</th>
			</tr>
			
				<?php
					include('dbconfig.php');
					$sql = "select * from product_table";
					$res=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($res)){
						echo "<tr>";
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['quantity']."</td>";
						echo "<td>".$row['ingredients']."</td>";
						echo "<td><img src='photos/".$row['photo']."' height='100px' width='100px'></td>";
						//echo "<td><img src='photos/".$row['photo']."' height='100px' width='100px'></td>";
						echo "<td>".$row['feedback']."</td>";
						echo "<td><a href='deleteproduct.php?id=".$row['id']."'>delete</a></td>";
						echo "</tr>";
					}
				?>
			
		<table>
	 
	</body>
</html>