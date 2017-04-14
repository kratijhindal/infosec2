<?php
include("header.php");
?>
<form method="POST" action="save_updatedportfolio.php" enctype="multipart/form-data">
	<?php
	//cpu cris
	include('dbconfig.php');
	$id=$_REQUEST['uid'];
	$sql="select * from portfolio where id='$id'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);
	
	?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center"><h2>Portfolio</h2></div>
			</div>

			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-4">
						<label>DESCRIBE:</label>
					</div>
					<div class="col-sm-8">
					   <textarea name="describe" class="formcontrol" rows="5" cols="30"><?php echo $row['discription']?></textarea>
					</div>
				</div><!--row ends--><br>
				<div class="row">
					<div class="col-sm-4">
						<label>UPDATE IMAGE:</label>
					</div>
					<div class="col-sm-8">
					   <input type="file" name="file1" class="formcontrol">
					</div>
				</div><!--row ends-->
				<div class="row">
					<div class="col-sm-4">
						<label>Previous IMAGE:</label>
					</div>
					<div class="col-sm-8">
					   <input type="text" name="file1" class="formcontrol" value="<?php echo $row['image']; ?>" readonly>
					</div>
				</div><!--row ends-->
				<div class="row">
					<div class="col-sm-4">
						<label>id:</label>
					</div>
					<div class="col-sm-8">
					   <input type="text" name="id" class="formcontrol" value="<?php echo $row['id'];?>">
					</div>
				</div><!--row ends-->
				</div>
				<div class="col-sm-2"></div>
			</div><br>
			<div class="row">
				<div class="col-sm-12 text-center">
					<input type="submit"  class="btn btn-primary" value="submit">
			        <input type="reset"  class="btn btn-danger" value="clear">
				</div>
			</div><!--row-->
		
		

			


		</div><!--container ends-->
</form>
<?php	
	
	
	include("footer.php");
?>