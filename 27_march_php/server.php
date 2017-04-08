<?php
	$ip_add = $_SERVER['REMOTE_ADDR'];
	
	function ip(){
		global $ip_add;
		$string ='your ip address is'. $ip_add;
			echo $string;
	}
		ip();
?>