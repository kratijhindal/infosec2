<?php
	include('header.php');
?>

	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-10">
		<table class="table table-bordered text-center">
			<caption><h2 class="text-center">CONTACT TABLE</h2></caption>
			<thead >
				<tr>
					<th class="text-center">name</th>
					<th class="text-center">email</th>			
					<th>mobile</th>
					<th>message</th>
					<th>delete</th>
					<th>edit</th>
					
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
						echo "<td><a href='delete.php?uid=".$row['id']."'>delete</a></td>";
						echo "<td><a href='edit.php?uid=".$row['id']."'>update</a></td>";
					echo "</tr>";
				}
			
			?>
			</tbody>
		</table>
		</div>
		<div class="col-sm-1">
		</div>
	</div>


