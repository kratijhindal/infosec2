<html>
	<body>
		<table cellspacing="10" align="center">
			<tr>
				<th>State</th>
				<td>
					<select name="state">
						<?php
							include('dbconfig.php');
							$sql="select * from state";
							$res=mysqli_query($conn,$sql);
							while($row1=mysqli_fetch_array($res)){
								echo "<option value=".$row1['id'].">".$row1['statename']."</option>";
							}
						
						?>
				    </select>
				</td>
				
			</tr>
			<tr>
				<th>City</th>
				<td><select name="city">
						<?php
							include('dbconfig.php');
							$sql = "select * from city";
							$res=mysqli_query($conn,$sql);
							while($row2=mysqli_fetch_array($res)){
								//<option value="1">mumbai</option>
								echo "<option value=".$row2['id'].">".$row2['cityname']."</option>";
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<th>Aminities</th>
				<td>
					
						
						<?php
					include("dbconfig.php");
				    $sql ="select * from aminities";
					$res =mysqli_query($conn,$sql);
					while($row3=mysqli_fetch_array($res)){
						echo "<input type='checkbox' name='aminities[]' value=".$row3['id'].">".$row3['aminity']."" ;
						echo "<br>";
					}
					//echo "<input type='radio' name='payment' value=".$row['id'].">".$row['payment']."" ;
					
				 	
				 
				 ?>
					
				</td>
			</tr>
			
			<tr>
				<th>Payment</th>
				<td>
					
						
						<?php
					include("dbconfig.php");
				    $sql ="select * from payment";
					$res =mysqli_query($conn,$sql);
					while($row4=mysqli_fetch_array($res)){
					 //echo <input type="radio" name="payment" value="1">debit
					 echo "<input type='radio' name='payment' value=".$row4['id'].">".$row4['mode_of_payment']."" ;
					 echo "<br>";
					 
					}
					
				 
				 ?>
					
				</td>
			</tr>
			
		</table>
	</body>
</html>