<?php

 $time = time();
 $date = date( 'D M Y',$time)."<br>";
 echo $time;
 echo "<br>";
 echo $date;
 
	//$num1 = 10;
	//$num2 = 5;
	function add($n1,$n2){
			$res =  $n1 + $n2;
			return $res;
	}
	function divide($a1,$a2){
		$res1 = $a1 / $a2;
		return $res1;
	}
	$sum= divide(add(10,10),add(5,5));
	echo $sum;
?>