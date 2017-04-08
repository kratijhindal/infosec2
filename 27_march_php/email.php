<?php
 if(isset($_POST['name']) && ($_POST['email']) && ($_POST['message']) ){
	  $name = $_POST['name'];
	  $email =$_POST['email'];
	  $message =$_POST['message'];
	  
	  if(!empty($name) && !empty($email) && !empty($message)){
		 
		/*$to ='kratijhindal@gmail.com'; 
		$subject = 'contact form submitted';
		$body = $name."\n". $message;
		$headers ='From:.$email';
		 //tsbh=tosiba
		if( mail($to,$subject,$body,$headers)){
			echo "mail sent";
		}*/
		 echo "ok";
	  }else{
		  echo "all fields are required";
	  }
 }
?>
<form method="POST" action="email.php">
	Name:<input type="text" name="name" maxlength="25"><br><br>
	Email:<input type="text" name="email" maxlength="50"><br><br>
	Message:<br>
	<textarea rows="5" cols="30" name="message" maxlength="20"></textarea><br><br>
	<input type="submit" name="submit" value="submit">
	
	
</form>