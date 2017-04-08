<?php
	include("header.php");
?>

<div class="container">
<h2 class="text-center">Registration-Form</h2>
<form method="POST" action="save_registration.php">
	<div class="row">
		<div class="col-sm-2"></div>
		
		<div class="col-sm-8">
			
				<div class="row">
					<div class="col-sm-6">
					
						<div class="row"><!--1 row statred-->
							<div class="col-sm-4">
								<label>Name</label>
							</div>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name">
							</div>
						</div><!--1 row ends-->
						
						<div class="row"><!--1 row statred-->
							<div class="col-sm-4">
								<label>Email</label>
							</div>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="email">
							</div>
						</div><!--1 row ends-->
						
						<div class="row"><!--1 row statred-->
							<div class="col-sm-4">
								<label>Mobile</label>
							</div>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="mobile">
							</div>
						</div><!--1 row ends-->
						
						<div class="row"><!--1 row statred-->
							<div class="col-sm-4">
								<label>City</label>
							</div>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="city">
							</div>
						</div><!--1 row ends-->
					
						<div class="row"><!--1 row statred-->
							<div class="col-sm-4">
								<label>Address</label>
							</div>
							<div class="col-sm-6">
								<textarea class="form-control" name="address" cols="20" rows="4"></textarea>
							</div>
						</div><!--1 row ends-->
					
					
					</div><!--col 6-->
					
					<div class="col-sm-6">
					
						<div class="row"><!--1 row statred-->
							<div class="col-sm-4">
								<label>Qualification</label>
							</div>
							<div class="col-sm-6">
								<select name="qual" class="form-control">
									<option value="choose">choose</option>
									<option value="bca">bca</option>
									<option value="btech">btech</option>
									<option value="msc">msc</option>
								</select>
							</div>
						</div><!--1 row ends-->
						
						<div class="row"><!--1 row statred-->
							<div class="col-sm-4">
								<label>Subject Preference</label>
							</div>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="sub">
							</div>
						</div><!--1 row ends-->
						
						<div class="row"><!--1 row statred-->
							<div class="col-sm-4">
								<label>Board</label>
							</div>
							<div class="col-sm-6">
								<select name="board" class="form-control">
									<option value="choose">choose</option>
									<option value="cbse">cbse</option>
									<option value="icse">icse</option>
									<option value="up board">up board</option>
								</select>
								
							</div>
						</div><!--1 row ends-->
						
						<div class="row"><!--1 row statred-->
							<div class="col-sm-4">
								<label>Teaching Mode</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" class="radio-inline" name="teaching" value="classroom">classroom  <br>
								<input type="radio" class="radio-inline" name="teaching" value="online">online<br>
							</div>
						</div><!--1 row ends-->
					
						<div class="row"><!--1 row statred-->
							<div class="col-sm-4">
								<label>Experience</label>
							</div>
							<div class="col-sm-6">
								<select name="exp" class="form-control">
								<option value="choose">choose</option>
								<option value="fresher">fresher</option>
								<option value="1 year">1 year</option>
								<option value="2 year">2 year</option>
								</select>
							</div>
						</div><!--1 row ends-->
					
					
					</div><!--col 6-->
					
				</div>
			
		</div>
		
		<div class="col-sm-2"></div>
	</div><!--row-->
	
	<div class="row">
		<div class="col-sm-12 text-center">
			<input type="submit" value="submit" class="btn btn-primary">
			<input type="reset" value="clear" class="btn btn-danger">
		</div>
	</div>
	</form>
</div><!--container-->
