<?php
	$arr1 = array('10','20','20.0','yogi');
	print_r($arr1);
	echo"<br>";
	$totalelements =count($arr1);
	echo "total elements in arr1 = $totalelements";
	echo "<br>";
	$arr2 = array('30','20','60','0','90');
	sort($arr2);
	print_r($arr2);
	echo "<br>";
	rsort($arr2);
	print_r($arr2);
	echo "<br>";
	$arr3 = array('name'=>"xyz",'class'=>"php",'marks'=>"100");
	print_r($arr3);
	echo "<br>";
	//$arr4 = array('x','class'=>"php",'marks'=>"100");
	print_r($arr3);
	echo "<br>";
	$arr4 = array("a"=>10,"b"=>20,"c"=>30);
	krsort($arr4);//key desencing order
	print_r($arr4);
	 echo "<br>";
	$arr5= array("x"=>100,"y"=>10,"z"=>30);
	arsort($arr5);//desending
	print_r($arr5);
	echo "<br>";
	$arr5= array("x"=>100,"y"=>10,"z"=>30);
	asort($arr5);//asending
	print_r($arr5);
	 echo "<br>";
	$arr6 = array('10','20','100');
	echo array_sum($arr6);
	echo "<br>";
	echo array_product($arr6);
	echo "<br>";
	array_push($arr6,110);
	print_r($arr6);
	
	echo "<br>";
	array_pop($arr6);
	echo "to remove last elemnet in an array";
	print_r($arr6);
	
	echo "<br>";
	array_shift($arr6);
	echo "to remove first elemnet in an array";
	print_r($arr6);
	
	echo "<br>";
	array_unshift($arr6,300);
	echo "to add elemnet at first place in an array";
	print_r($arr6);
	
	
	
	
	
	
	
	
	
	
	
?>