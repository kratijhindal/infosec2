<?php
	include("header.php");
?>
<div class="container">
    <div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		
<table align="center" class="table table-bordered table-striped">
	<thead>
	<tr>
		
		<th>name</th>
		<th>email</th>
		<th>password</th>
		<th>mobile</th>
		<th>city</th>
		<th>address</th>
		<th>gender</th>
		
	</tr>
	</thead>
	<tbody>
		<?php
		include("db_config.php");
		
		$sql = "select * from contact";
		$res = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($res)){
			echo "<tr>";
			
				echo "<td>".$row['name']."</td>"; 
				echo "<td>".$row['email']."</td>"; 
				echo "<td>".$row['password']."</td>"; 
				echo "<td>".$row['mobile']."</td>"; 
				echo "<td>".$row['city']."</td>"; 
				echo "<td>".$row['address']."</td>"; 
				echo "<td>".$row['gender']."</td>"; 
			
			echo "</tr>";
				/*print_r($row);
				echo "<br>";*/
		}
	
	
	
	
	
	?>
	
	<tbody>
	
</table>
</div>
		<div class="col-sm-3"></div>

	</div>
	</div><!--container-->
<?php
	include("footer.php");
?>