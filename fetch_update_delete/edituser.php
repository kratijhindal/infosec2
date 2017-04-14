<?php
include("header.php");
?>
<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
		<form method="POST" action="saveupdateduser.php" enctype="multipart/form-data">
		<?php
			include("db_config.php");//cpi...get id which is passed in url.
			$id=$_REQUEST['id'];
			$sql ="select * from details where id='$id'";
			$res=mysqli_query($conn,$sql);
	        $row=mysqli_fetch_array($res);
		?>
			<table cellspacing="10" align="center">
				<caption><h2>update</h2></caption>
				<tr>
					<th>Name:</th>
					<td><input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>"><td>
				</tr>
				<tr>
					<th>Email</th>
					<td><input type="text" name="email" class="form-control" value="<?php echo $row['email'];?>"></td>
				</tr>
				<th>Mobile</th>
					<td><input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile'];?>"></td>
				</tr>
				
				<tr>
					<th>Address</th>
					<td>
						<textarea rows="5" cols="30" name="address" class="form-control"><?php echo $row['address'];?></textarea>
					</td>
				</tr>
				
				
				<tr>
					<th>Previous Photo</th>
					<td>
						<input type="file" name="file1" class="form-control">
						
					</td>
					
				</tr>
				<tr>
					<th>Updated Photo</th>
					<td>
						<input type="text" name="previous upload" class="form-control" value="<?php echo $row['photo'];?>" readonly>
						
					</td>
					
				</tr>
				
				<tr>
					
					<td>
						<input type="hidden" name="uid" class="form-control" value="<?php echo $row['id'];?>">
						
					</td>
					
				</tr>
				
				
				
					<td colspan="4" align="center">
						<input type="submit" value="update" class="btn btn-primary">
						<!--<input type="reset" value="clear" class="btn btn-primary">-->
					</td>
				</tr>
				
				
				
				
			
					
				
				
			</table>
		</form>
		</div>
			<div class="col-sm-3"></div>
		</div>
	