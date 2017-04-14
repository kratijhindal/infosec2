<?php
	include("header.php");
?>

<div class="container">
	<div class="row">
		<!--<div class="col-sm-3"></div>-->
		
		<div class="col-sm-12">
			<table class="table table-bordered">
				<tr>
					<thead>
					    <!--<th>id</th>-->
						<th>name</th>
						<th>email</th>
						<th>mobile</th>
						
						<th>qualification</th>
						<th>address</th>
						<th>hobby</th>
						<th>gender</th>
						<th>photo</th>
						<th>payment</th>
						<th>delete</th>
						<th>edit</th>
					</thead>
					
					<tbody>
						<?php
							include("db_config.php");
							$sql = "select * from details";
							$res = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_array($res))
							{
								//here names are column names of databse i.e row means database row .
								echo "<tr>";
								//echo "<td>".$row['id']."</td>";//u can take it if u want id ...optional
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['mobile']."</td>";
								echo "<td>".$row['qualification']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['hobby']."</td>";
								echo "<td>".$row['gender']."</td>";
								
								echo "<td><img src='photos/".$row['photo']."' height='100px' width='100px'></td>";
								//"<td><img src="photos/img.jpg" height="" width=""></td>
								//"<td><img src='photos/".$[''].'" height="" width=""></td>"
								
								echo "<td>".$row['payment']."</td>";
								//echo "<td>".$row['experience']."</td>";
								echo "<td><a href='deleteuser.php?userid=".$row['id']."'>delete</a></td>";
								echo "<td><a href='edituser.php?id=".$row['id']."'>edit</a></td>";
								echo "</tr>";
							}
						
						?>
					</tbody>
				</tr>
			</table>
		</div>
		
		<!--<div class="col-sm-3"></div>-->
	</div><!--row-->
	
	
</div><!--container-->
