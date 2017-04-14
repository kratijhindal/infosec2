<html>
	<body>
		<form method="POST" action="saveupdate.php" enctype="multipart/form-data">
			<?php
				//cpi
				include('connect.php');
				$newid=$_REQUEST['id'];
				 $sql="select * from today where userid='$newid'";
				 $res=mysqli_query($conn,$sql);
				 $row=mysqli_fetch_array($res);
			?>
			<table align="center" cellspacing="10">
				<tr>
					<th>name</th>
					<td><input type="text" name="name1" value="<?php echo $row['uname']?>"></td>
					
				</tr>
				<tr>
					<th>upload photo</th>
					<td><input type="file" name="photo1" readonly></td>
					
				</tr>
				<tr>
					<th>previous photo</th>
					<td><input type="text" name="photo1" value="<?php echo $row['upload_photo']?>" ></td>
					
				</tr>
				<tr>
					<th>id</th>
					<td><input type="hidden" name="id1" value="<?php echo $row['userid']?>"></td>
					
				</tr>
				<tr>
					
					<td colspan="8" align="center"><input type="submit" value="save">
					<input type="reset" value="clear"></td>
					
				</tr>
			</table>
		</form>
	</body>
<html>