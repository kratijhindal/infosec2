<?php
	include("header.php");
?>
<form method="POST" action="save_registration.php">
<div class="container">
	<div class="row">
		<div class="col-sm-3"></div>
		
		<div class="col-sm-6">
			<table class="table table-bordered">
				<tr>
					<thead>
						<th>name</th>
						<th>email</th>
						<th>mobile</th>
						<th>city</th>
						<th>address</th>
						<th>qualification</th>
						<th>subject</th>
						<th>board</th>
						<th>teaching</th>
						<th>experience</th>
						
					</thead>
					<tbody>
						<?php
							include("db_config.php");
							$sql = "select * from teaching";
							$res = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_array($res))
							{
								echo "<tr>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['mobile']."</td>";
								echo "<td>".$row['city']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['qualification']."</td>";
								echo "<td>".$row['subject']."</td>";
								echo "<td>".$row['board']."</td>";
								echo "<td>".$row['teaching']."</td>";
								echo "<td>".$row['experience']."</td>";
								echo "</tr>";
							}
						
						?>
					</tbody>
				</tr>
			</table>
		</div>
		
		<div class="col-sm-3"></div>
	</div><!--row-->
	
	<div class="row">
		<div class="col-sm-12 text-center">
			<input type="submit" value="submit" class="btn btn-primary">
			<input type="reset" value="clear" class="btn btn-danger">
		</div>
	</div>
</div><!--container-->
</form>