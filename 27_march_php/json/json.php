<?php
	$jsondata = file_get_contents("example.json");//fgc
	$json = json_decode($jsondata,true);//jd = fgc jd
	
	echo $json['emp'][1]['salary'];
	
	/*foreach($json['emp'] as $value){
		 
		 print_r "$value";
		echo "<br>";
	
	}*/
?>