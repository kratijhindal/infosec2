<?php
	include('header.php');
?>

	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-10">
		<table class="table table-bordered text-center">
			<thead>
				<tr>
					<th>name</th>
					<th>address</th>
					<th>email</th>
					<th>gender</th>
					<th>password</th>
					<th>qualification</th>
					<th>confirm_password</th>
					<th>language</th>
					<th>mobile</th>
					<th>photo</th>
					<th>city</th>
				</tr>
			</thead>
			
			<tbody>
			<?php
				include("dbconfig.php");
				$sql = "select * from signup";
				$res=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($res))
				{
						echo "<tr>";
							echo "<td>".$row['name']."</td>";
							echo "<td>".$row['address']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td>".$row['gender']."</td>";
							echo "<td>".$row['password']."</td>";
							echo "<td>".$row['qualification']."</td>";
							echo "<td>".$row['confirm_password']."</td>";
							echo "<td>".$row['language']."</td>";
							echo "<td>".$row['mobile']."</td>";
							echo "<td>".$row['photo']."</td>";
							echo "<td>".$row['city']."</td>";
							
							
							
							
							
						echo "</tr>";
				}
			
			?>
			</tbody>
		</table>
		</div>
		<div class="col-sm-1">
		</div>
	</div>

<?php
	include('footer.php');
?>
