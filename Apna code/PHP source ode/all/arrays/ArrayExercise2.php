<?php 

$arr1=[
  	 "planets" =>
				[
	   "sun" => 
	   [ "temp" => "hot", "color" => "red" ],
	   "moon" => 
	   [ "temp" => "cold", "color"  => "white" ],
       "earth" => 
       [ "temp" => "normal", "color" => "blue" ]
	]
];	
	//print_r($arr1).PHP_EOL;
	
	foreach ($arr1 as $key => $value) {
	
	echo $key.PHP_EOL;
	
	foreach ($value as $keys => $value2) {
	
	echo $keys.PHP_EOL;
		print_r($value2).PHP_EOL;
		# code...
	
	}

	# code...
}


 ?>

