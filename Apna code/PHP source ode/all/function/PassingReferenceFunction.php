<?php 

/*	$result=0;
	function add($a,$b,$result=null){
		$sum_is=$a+$b;
		return $sum_is;
	}
	echo $result.PHP_EOL;
	 $result=add(1,2);
	 echo $result;*/

$result=0;
	function add($a,$b,&$resul=null)
		{
			$resul=$a+$b;	
							}
	
	echo $result.PHP_EOL;
	add(1,2,$resul);
	echo $resul; ?>