<?php
include("header.php");
?>
<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
		<form method="POST" action="saveregister.php" enctype="multipart/form-data">
			<table cellspacing="10" align="center">
				<caption><h2>Student Registration</h2></caption>
				<tr>
					<th>Name:</th>
					<td><input type="text" name="name" class="form-control"><td>
				</tr>
				<tr>
					<th>Email</th>
					<td><input type="text" name="email" class="form-control"></td>
				</tr>
				<th>Mobile</th>
					<td><input type="text" name="mobile" class="form-control"></td>
				</tr>
				<tr>	
					<th>Qualification</th>
					<td>
						<select name="qual" class="form-control">
							<option value="choose">choose qualification </option>
							<option value="bca">BCA</option>
							<option value="mca">MCA</option>
							<option value="m.sc">m.sc</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Address</th>
					<td>
						<textarea rows="5" cols="30" name="address" class="form-control"></textarea>
					</td>
				</tr>
				<tr>
					<th>Hobby</th>
					<td>
						
						<label class="checkbox"><input type="checkbox" value="dancing" name="hobby[]">Dancing</label>
						<label class="checkbox"><input type="checkbox" value="swmming" name="hobby[]">Swmming</label>
						<label class="checkbox"><input type="checkbox" value="sleeping" name="hobby[]">sleeping</label>
						<label class="checkbox"><input type="checkbox" value="traveling" name="hobby[]">traveling</label>
						<label class="checkbox"><input type="checkbox" value="chating" name="hobby[]">chating</label>
						<label class="checkbox"><input type="checkbox" value="eating" name="hobby[]">eating</label>
				</tr>
				<tr> 
					<th>Gender</th>
					<td>
						<label class="radio"><input type="radio" value="male"  name="gender">Male</label>
						<label class="radio"><input type="radio" value="female" name="gender">Female</label>
					</td>
				</tr>
				<tr>
					<th>Photo</th>
					<td>
						<input type="file" name="file1" class="form-control">
						
					</td>
					
				</tr>
				
				<tr>
					<th>Payment</th>
					<td>
						<label class="radio"><input type="radio" value="cash" name="payment">cash</label>
						<label class="radio"><input type="radio" value="credit" name="payment">credit</label>
						<label class="radio"><input type="radio" value="debit" name="payment">debit</label>
					</td>
				</tr>
				<tr>
					<td colspan="4" align="center">
						<input type="submit" value="Register" class="btn btn-primary">
						<input type="reset" value="clear" class="btn btn-primary">
					</td>
				</tr>
				
				
				
				
			
					
				
				
			</table>
		</form>
		</div>
			<div class="col-sm-3"></div>
		</div>
	