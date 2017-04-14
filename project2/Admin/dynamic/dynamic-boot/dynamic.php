<?php
	include('header.php');
?>

<!--main part of body starts-->
	  <div class="row">
		<div class="col-sm-3"></div>
		
		<div class="col-sm-6">
			<div class="row">
				<div class="col-sm-3">
					<label>State</label>
				</div>
				<div class="col-sm-9">
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
				</div>
			</div><br>
			
			
			<div class="row">
				<div class="col-sm-3">
					<label>City</label>
				</div>
				<div class="col-sm-9">
					<select name="city">
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
				
				</div>
			</div><br>
			
			<div class="row">
				<div class="col-sm-3">
					<label>Aminities</label>
				</div>
				<div class="col-sm-9">
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
				<br>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-3">
					<label>Payment</label>
				</div>
				<div class="col-sm-9">
					<?php
					include("dbconfig.php");
				    $sql ="select * from payment";
					$res =mysqli_query($conn,$sql);
					while($row4=mysqli_fetch_array($res)){
					 //echo <input type="radio" name="payment" value="1">debit
					 echo "<input type='radio' name='payment' value=".$row4['id'].">".$row4['mode_of_payment']."" ;
					 echo "<br>";
					 
					}
					
				 
				 ?><br>
				</div>
			</div>
		</div><!--6 col-->
		
		<div class="col-sm-3"></div>
	  </div>
			
<?php
	include('footer.php');
?>

	 
	 
	 