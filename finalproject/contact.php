<?php
include("header.php");
?>
<form method="POST" action="save_contact.php">
		<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center"><h2>Contact Us</h2></div>
		</div>

		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<div class="well text-center">
					<label>Address:</label><br>
					<textarea class="form-control" rows="7" cols="20"></textarea>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="well text-center">
					<div class="row">
						<div class="col-sm-4">
							<label>NAME:</label>
						</div><!--col4-->
						<div class="col-sm-8">
							<input type="text" name="name" class="form-control">
						</div><!--col8-->
					</div><!--row1-->
					<div class="row">
						<div class="col-sm-4">
							<label>EMAIL:</label>
						</div><!--col4-->
						<div class="col-sm-8">
							<input type="text" name="email" class="form-control">
						</div><!--col8-->
					</div><!--row1-->
					<div class="row">
						<div class="col-sm-4">
							<label>MOBILE:</label>
						</div><!--col4-->
						<div class="col-sm-8">
							<input type="text" name="mobile" class="form-control">
						</div><!--col8-->
					</div><!--row1-->
					<div class="row">
						<div class="col-sm-4">
							<label>MESSAGE:</label>
						</div><!--col4-->
						<div class="col-sm-8">
							<textarea name="message" class="form-control" rows="3" cols="20"></textarea>
							<br>
						</div><!--col8-->
					</div><!--row1-->
					<div class="row">
	                  <div class="col-sm-12 text-center">
		                 <input type="submit" value="Register" class="btn btn-primary">
		                 <input type="reset" value="Clear" class="btn btn-danger">
	                  </div>
                     </div>
				</div><!--well complete-->
			</div><!--col 7-->
			<div class="col-sm-1"></div>
		</div>
		
		

			


		</div><!--container ends-->
</form>
<?php	
	
	
	include("footer.php");
?>