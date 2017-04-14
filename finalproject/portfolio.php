<?php
include("header.php");
?>
<form method="POST" action="saveportfolio.php" enctype="multipart/form-data">
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
					   <textarea name="describe" class="formcontrol" rows="5" cols="30"></textarea>
					</div>
				</div><!--row ends--><br>
				<div class="row">
					<div class="col-sm-4">
						<label>PORTFOLIO IMAGE:</label>
					</div>
					<div class="col-sm-8">
					   <input type="file" name="file1" class="formcontrol">
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