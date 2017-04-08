<?php
		if (isset($_GET['name']) && !empty($_GET['name'])){
			echo $name = $_GET['name'].'<br>';
			$name_lo = strtolower($name);
			echo $name_lo;
			
		
       
	}
	
	//new php
	$string = 'this it krati';
	echo "t is in position:".strpos($string,t).'<br>';
	echo "reple string is :".substr_replace($string,'s',6);
	
	
	
	
?>

<form action="strtolower.php" method="GET">
	Name:<input type="text" name="name"><br><br>
		 <input type ="submit" value="submit">
</form>