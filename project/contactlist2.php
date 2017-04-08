<?php
	include("header.php");
?>
<table align="center" bgcolor="skyblue" cellspacing="20" border="2px black" width="500px" height="500px">
	<tr>
		<thead>
		<th>name</th>
		<th>email</th>
		<th>password</th>
		<th>mobile</th>
		<th>city</th>
		<th>address</th>
		<th>gender</th>
		</thead>
	</tr>
	<tbody>
		<?php
		include("dbconfig.php");
		$sql = "select * from contact";
		$res = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_object($res)){
			echo "<tr>";
			
				echo "<td>".$row->name."</td>"; 
				echo "<td>".$row->email."</td>"; 
				echo "<td>".$row->password."</td>"; 
				echo "<td>".$row->mobile."</td>"; 
				echo "<td>".$row->city."</td>"; 
				echo "<td>".$row->address."</td>"; 
				echo "<td>".$row->gender."</td>"; 
			
			echo "</tr>";
		}
	
	
	
	
	
	?>
	
	<tbody>
	
</table>
<?php
	include("footer.php");
?>