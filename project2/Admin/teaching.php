<?php
	include("header.php");
?>

<div class="container">
<h2 class="text-center">Registration-Form</h2>
<form method="POST" class="form-horizontal" role="form" action="save_registration.php">
	<div class="row">
		<div class="col-sm-2"></div>
		
		<div class="col-sm-8">
			
				<div class="row">
					<div class="col-sm-6">
					
						<div class="form-group"><!--1 row statred-->
							<label for="name" class="col-sm-4 control-label">
								Name:
							</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name" id="name">
							</div>
						</div><!--1 row ends-->
						
						<div class="form-group"><!--1 row statred-->
							<label for="email" class="col-sm-4 control-label">
								Email:
							</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="email" id="email">
							</div>
						</div><!--1 row ends-->
						
						<div class="form-group"><!--1 row statred-->
							<label for="mobile" class="col-sm-4 control-label">
								Mobile:
							</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="mobile" id="mobile">
							</div>
						</div><!--1 row ends-->
						
						<div class="form-group"><!--1 row statred-->
							<label for="city" class="col-sm-4 control-label">
								City:
							</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="city">
							</div>
						</div><!--1 row ends-->
					
						<div class="form-group"><!--1 row statred-->
							<label for="address" class="col-sm-4 control-label">
								Address:
							</label>
							<div class="col-sm-6">
								<textarea class="form-control" name="address" cols="20" rows="4" id="address"></textarea>
							</div>
						</div><!--1 row ends-->
					
					
					</div><!--col 6-->
					
					<div class="col-sm-6">
					
						<div class="form-group"><!--1 row statred-->
							<label for="qual" class="col-sm-4 control-label">
								Qualification:
							</label>
							<div class="col-sm-6">
								<select name="qual" class="form-control" id="qual">
									<option value="choose">choose</option>
									<option value="bca">bca</option>
									<option value="btech">btech</option>
									<option value="msc">msc</option>
								</select>
							</div>
						</div><!--1 row ends-->
						
						<div class="form-group"><!--1 row statred-->
							<label for="sub" class="col-sm-4 control-label">
								Subject Preference:
							</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="sub">
							</div>
						</div><!--1 row ends-->
						
						<div class="form-group"><!--1 row statred-->
							<label for="board" class="col-sm-4 control-label">
								Board:
							</label>
							<div class="col-sm-6">
								<select name="board" class="form-control" id="board">
									<option value="choose">choose</option>
									<option value="cbse">cbse</option>
									<option value="icse">icse</option>
									<option value="up board">up board</option>
								</select>
								
							</div>
						</div><!--1 row ends-->
						
						<div class="form-group"><!--1 row statred-->
							<label  class="col-sm-4 control-label">
								Mode Of Teaching:
							</label>
							<div class="col-sm-6">
								<input type="radio" class="radio-inline" name="teaching" value="classroom">classroom  <br>
								<input type="radio" class="radio-inline" name="teaching" value="online">online<br>
							</div>
						</div><!--1 row ends-->
					
						<div class="form-group"><!--1 row statred-->
							<label for="exp" class="col-sm-4 control-label">
								Experience:
							</label>
							<div class="col-sm-6">
								<select name="exp" class="form-control" id="exp">
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
