<?php
include("header.php");
?>
<form method="POST" action="save_signup.php" enctype="multipart/form-data">
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
				   <input type="text" name="name" class="form-control">
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-3">
				  <label>EMAIL:</label>
				</div><!--col 6-->
				<div class="col-sm-9">
				   <input type="text" name="email" class="form-control">
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-3">
				  <label>PASSWORD:</label>
				</div><!--col 6-->
				<div class="col-sm-9">
				   <input type="text" class="form-control" name="password">
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-3">
				  <label>CONFIRM PASSWORD:</label>
				</div><!--col 6-->
				<div class="col-sm-9">
				   <input type="text" class="form-control" name="cpassword">
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-3">
				  <label>MOBILE:</label>
				</div><!--col 6-->
				<div class="col-sm-9">
				   <input type="text" class="form-control" name="mobile">
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-3">
				  <label>CITY:</label>
				</div><!--col 6-->
				<div class="col-sm-9">
				   <select name="city" class="form-control">
				    <option value="choose city">choose city</option>
					<option value="banglore">banglore</option>
					<option value="firozabad">PUNE</option>
					<option value="BCA">MUMBAI</option>
					<option value="BCA">DELHI</option>
					
				</select><br>
				</div><!--col 6-->
			  </div><!--row-->
			</div><!--col6 mail col-->
			
			
			
			<div class="col-sm-6">
			
			
			  <div class="row">
				<div class="col-sm-4">
				  <label>ADDRESS:</label>
				</div><!--col 6-->
				<div class="col-sm-8">
				   <textarea class="form-control" name="address" cols="30" rows="5"></textarea>
				<br>
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-4">
				  <label>GENDER:</label>
				</div><!--col 6-->
				<div class="col-sm-8">
				   <input type="radio" class="radio-inline" value="male" name="gender"><label>Male</label>&nbsp &nbsp
				<input type="radio" class="radio-inline" value="female" name="gender"><label>Female</label>
				<br>
				</div><!--col 6-->
			  </div><!--row-->
			  
			  
			  <div class="row">
				<div class="col-sm-4">
				  <label>QUALIFICATION:</label>
				</div><!--col 6-->
				<div class="col-sm-8">
				   <select name="qual" class="form-control">
					<option value="choose">choose</option>
					<option value="BCA">MCA</option>
					<option value="BCA">BCA</option>
					<option value="BCA">B.TECH</option>
					<option value="BCA">M.SC</option>
				</select><br>
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-4">
				  <label>LANGUAGE:</label>
				</div><!--col 6-->
				<div class="col-sm-8">
				   <input type="checkbox" class="checkbox-inline" value="C" name="lang[]"><label>C</label>&nbsp &nbsp
				<input type="checkbox" class="checkbox-inline" value="C++" name="lang[]"><label>C++</label><br>
				<input type="checkbox" class="checkbox-inline" value="JAVA" name="lang[]"><label>JAVA</label>&nbsp &nbsp
				<input type="checkbox" class="checkbox-inline" value="PHP" name="lang[]"><label>PHP</label><br>
				<br>
				</div><!--col 6-->
			  </div><!--row-->
			  
			  <div class="row">
				<div class="col-sm-4">
				  <label>PHOTO:</label>
				</div><!--col 6-->
				<div class="col-sm-8">
				   <input type="file" name="file1" class="form-control"><br>
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