<?php
include("header.php");
?>

		<div class="container">
			

			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
		<table class="table text-center table-bordered">
			<caption><h2 class="text-center">PORTFOLIO LIST</h2></caption>
			<thead>
				<tr>
					<th>Description</th>
					<th>Image</th>
					<th>update</th>
					<th>delete</th>
				</tr>
			</thead>
			
			
			<tbody>
				<?php
					include("dbconfig.php");
					$sql ="select * from portfolio";
					$res=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($res)){
						echo "<tr>";
						echo "<td>".$row['discription']."</td>";
						echo "<td><img src='photos/".$row['image']." ' width='100' height='100'></td>";
						echo "<td><a href='updateportfolio.php?uid=".$row['id']."'>update</a></td>";
						echo "<td><a href='delete_portfolio.php?uid=".$row['id']."'>delete</a></td>";
						echo "</tr>";
					}
				?>
				
			</tbody>
		</table>
				</div>
				<div class="col-sm-2"></div>
			</div>
			

			


		</div><!--container ends-->
</form><br>
<?php	
	
	
	include("footer.php");
?>