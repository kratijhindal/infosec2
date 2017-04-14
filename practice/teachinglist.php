<?php
	include('header.php');
?>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<table  class="table table-bordered">
						
						<tr>
						<thead>
							<th>name</th>
							<th>email</th>
							<th>mobile</th>
							<th>city</th>
							<th>photo</th>
							<th>qualification</th>
							<th>subject</th>
							<th>board</th>
							<th>mode</th>
							<th>experience</th>
							</thead>
						</tr>
						
						
						<tbody>
						  <?php
							include("dbconfig.php");
							$sql = "select * from teach";
							$res=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($res))
							{
								echo "<tr>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['mobile']."</td>"; 
								echo "<td>".$row['city']."</td>";
								echo "<td><img src='photos/".$row['photo']."' height='100px' width='100px'></td>";
								echo "<td>".$row['qualification']."</td>";
								echo "<td>".$row['subject']."</td>";
								echo "<td>".$row['board']."</td>";
								echo "<td>".$row['mode']."</td>";
								//echo "<td>".$row['payment']."</td>";
								echo "<td>".$row['experience']."</td>";
								echo "</tr>";
							}
						
						?>
						 
						</tbody>
						
					</table>
					
				</div>
				<div class="col-sm-2"></div>
				
	<?php
	include('footer.php');
    ?>			
			