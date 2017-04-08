<?php
	$x =array("10","20","30");
	
	//key as value..kav
	foreach($x as $value){
		echo $value;
		echo "<br>";
	}
	$y = array("one"=>100,"two"=>300);
		print_r($y);
		echo "<br>";
		
		foreach($y as $z =>$value){
			echo "\$y[$z]=>$value\n";
		}
	
?>