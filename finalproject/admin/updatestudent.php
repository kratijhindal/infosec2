<?php
include("header.php");
?>
<form method="POST" action="save_update_student.php" enctype="multipart/form-data">
	<?php
		//crib
		include("dbconfig.php");
		$upid=$_REQUEST['uid'];
		 $sql ="select * from signup where id='$upid'";
		
	    $res=mysqli_query($conn,$sql);
	    $row=mysqli_fetch_array($res);
			
	?>
<div class="container">

<div class="row">
	<div class="col-sm-12 text-center"><h2>Student Registration</h2></div>
</div>
<div class="well">
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div class="row">
			<div class="col-sm-6">
			
			
			  <div class="row">
				<div class="col-sm-3">
				  <label>NAME:</label>
				</div><!--col 6-->
				<div class="col-sm-9">
				   <input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-3">
				  <label>EMAIL:</label>
				</div><!--col 6-->
				<div class="col-sm-9">
				   <input type="text" name="email" class="form-control" value="<?php echo $row['email']?>">
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-3">
				  <label>PASSWORD:</label>
				</div><!--col 6-->
				<div class="col-sm-9">
				   <input type="text" class="form-control" name="password" value="<?php echo $row['password']?>">
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-3">
				  <label>CONFIRM PASSWORD:</label>
				</div><!--col 6-->
				<div class="col-sm-9">
				   <input type="text" class="form-control" name="cpassword" value="<?php echo $row['confirm_password']?>">
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-3">
				  <label>MOBILE:</label>
				</div><!--col 6-->
				<div class="col-sm-9">
				   <input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile']?>">
				</div><!--col 6-->
			  </div><!--row-->
			    
			  <div class="row">
				<div class="col-sm-3">
				  <label>CITY:</label>
				</div><!--col 6-->
				   <div class="col-sm-9">
				   <input type="text" class="form-control" name="city" value="<?php echo $row['city']?>">
				</div><!--col 6-->
			  </div><!--row-->
			</div><!--col6 mail col-->
			
			
			
			<div class="col-sm-6">
			
			
			  <div class="row">
				<div class="col-sm-4">
				  <label>ADDRESS:</label>
				</div><!--col 6-->
				<div class="col-sm-8">
				   <textarea class="form-control" name="address" cols="30" rows="5"><?php echo $row['address']?></textarea>
				<br>
				</div><!--col 6-->
			  </div><!--row-->
			  
			  
			  
			  
			  
			  
			  
			  
			  <div class="row">
				<div class="col-sm-4">
				  <label> update PHOTO:</label>
				</div><!--col 6-->
				<div class="col-sm-8">
				   <input type="file" name="file1" class="form-control"><br>
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-4">
				  <label> previous PHOTO:</label>
				</div><!--col 6-->
				<div class="col-sm-8">
				   <input type="text" name="file1" class="form-control" value="<?php echo $row['photo'] ?>" ><br>
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-4">
				  
				</div><!--col 6-->
				<div class="col-sm-8">
				   <input type="hidden" name="myid" class="form-control" value="<?php echo $row['id']?>"><br>
				</div><!--col 6-->
			  </div><!--row-->
			  
			</div><!--col6 mail col-->
			
			
		    
	 </div><!--row-->
	
	
	
	</div><!--col8-->
	<div class="col-sm-2"></div>
</div><!--row-->

	

<div class="row">
	<div class="col-sm-12 text-center">
		<input type="submit" value="Register" class="btn btn-primary">
		<input type="reset" value="Clear" class="btn btn-danger">
	</div>
</div>
</div><!--well-->
</div>
</form>
<?php	
	
	
	include("footer.php");
?>