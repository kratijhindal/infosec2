<?php
	include('header.php');
?>
   <div class="container">
	<div class="row">
		
		<div class="col-sm-12">
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
					<th>delete</th>
					<th>update</th>
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
							echo "<td><img src='photos/".$row['photo']."' height='100' width='100'></td>";
							echo "<td>".$row['city']."</td>";
							echo "<td><a href='deletestudent.php?uid=".$row['id']."'>delete</a></td>";
							echo "<td><a href='updatestudent.php?uid=".$row['id']."'>update</a></td>";
							
							
							
							
							
						echo "</tr>";
				}
			
			?>
			</tbody>
		</table>
		</div>
		
	</div>
	</div>

<?php
	include('footer.php');
?>
