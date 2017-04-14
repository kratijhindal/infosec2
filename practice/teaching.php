<?php
	include('header.php');
?>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<form action="save_teaching.php" method="post" enctype="multipart/form-data">
						<h2 class="text-center">Teaching</h2>
						<div class="row">
							<div class="col-sm-12">
								<div class="col-sm-1"></div>
								<div class="col-sm-5">
									<div class="row"><!--1 row starts-->
										<div class="col-sm-4">
											<label>Name</label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="name">
										</div>
									</div> <!--1 row ends-->
									<div class="row"><!--1 row starts-->
										<div class="col-sm-4">
											<label>Email</label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="email">
										</div>
									</div> <!--1 row ends-->
									<div class="row"><!--1 row starts-->
										<div class="col-sm-4">
											<label>Mobile</label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="mobile">
										</div>
									</div> <!--1 row ends-->
									<div class="row"><!--1 row starts-->
										<div class="col-sm-4">
											<label>City</label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="city">
										</div>
									</div> <!--1 row ends-->
									<div class="row"><!--1 row starts-->
										<div class="col-sm-4">
											<label>Photo</label>
										</div>
										<div class="col-sm-8">
											<input type="file" class="form-control" name="photo">
										</div>
									</div> <!--1 row ends-->
								</div><!--5 col ends-->
								
								<div class="col-sm-5">
									<div class="row"><!--1 row starts-->
										<div class="col-sm-4">
											<label>Qualification</label>
										</div>
										<div class="col-sm-8">
										 <select class="form-control" name="qual">
											<option value="choose">choose</option>
											<option value="msc">msc</option>
											<option value="bsc">bsc</option>
											<opti<on value="bca">bca</option>
										 </select>
										</div>
									</div> <!--1 row ends-->
									<div class="row"><!--1 row starts-->
										<div class="col-sm-4">
											<label>Subject</label>
										</div>
										<div class="col-sm-8">
											<input type="checkbox"  name="sub[]" value="hindi">Hindi
											<input type="checkbox"  name="sub[]" value="english">English
											<input type="checkbox"  name="sub[]" value="maths">Maths
											<input type="checkbox"  name="sub[]" value="computer">Computer
											<input type="checkbox"  name="sub[]" value="science">Science
										</div>
									</div> <!--1 row ends-->
									<div class="row"><!--1 row starts-->
										<div class="col-sm-4">
											<label>Board</label>
										</div>
										<div class="col-sm-8">
										 <select class="form-control" name="board">
											<option value="choose">choose</option>
											<option value="up">up</option>
											<option value="cbse">cbse</option>
											<option value="icse">icse</option>
										 </select>
										</div>
									</div> <!--1 row ends-->
									<div class="row"><!--1 row starts-->
										<div class="col-sm-4">
											<label>Teaching Mode</label>
										</div>
										<div class="col-sm-8">
											<input type="radio"  name="mode" value="classroom">classsroom<br>
											<input type="radio" name="mode" value="online">online
										</div>
									</div> <!--1 row ends-->
									<div class="row"><!--1 row starts-->
										<div class="col-sm-4">
											<label>Experience</label>
										</div>
										<div class="col-sm-8">
											<select class="form-control" name="exp">
											<option value="choose">choose</option>
											<option value="fresher">fresher</option>
											<option value="1 year">1 year</option>
											<option value="2 year">2 year</option>
										 </select>
										</div>
									</div> <!--1 row ends-->
								</div><!--5 col ends-->
								<div class="col-sm-1"></div>
							</div>
						</div>
						
						<div class="row">
					<div class="col-sm-12 text-center">
						<input type="submit" value="submit" class="btn btn-primary">
						<input type="reset" value="clear" class="btn btn-danger">
					</div>
				</div>
						
					</form><br>
				</div>
				<div class="col-sm-2"></div>
				
	<?php
	include('footer.php');
    ?>			
			