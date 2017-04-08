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
					<th>email</th>			
					<th>mobile</th>
					<th>message</th>
					
				</tr>
			</thead>
			
			<tbody>
			<?php
				include("dbconfig.php");
				$sql = "select * from contact";
				$res = mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($res))
				{
                    echo "<tr>";
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['email']."</td>";
						echo "<td>".$row['mobile']."</td>";
						echo "<td>".$row['message']."</td>";
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

