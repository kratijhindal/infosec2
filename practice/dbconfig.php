<?php
	$conn = mysqli_connect("localhost","root","","practice");
	if($conn==true){
		echo "connected.<br>";
	}else{
		echo "not connected";
	}
?>