<?php
	$find = array('krati','jhindal');
	$replace = array('kra*i','jhin**l');





	if(isset($_POST['user']) && !empty($_POST['user'])){
	  $user = $_POST["user"];
	  //$user_lc = strtolower($user);54
	  $user_new = str_ireplace($find,$replace,$user);
	  echo $user_new;
	}
?>
<hr>
<form method="POST" action="word.php">
	<textarea rows="6" cols="30" name="user"><?php 
	  echo $user;
	 ?></textarea><br>
	<input type = "submit" value="submit">
</form>