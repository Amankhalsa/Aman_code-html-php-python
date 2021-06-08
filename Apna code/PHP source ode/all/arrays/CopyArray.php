<?php 	
//1) How to copy arrays from one array variable to another one.

$arr =[1,2,3,4,5];
//print_r($arr).PHP_EOL;

$arr1=$arr;
print_r($arr1).PHP_EOL;

print "using foreach loop";
//$arr2=[];
foreach ($arr as $value) {
	# code...
	$arr2[]=$value;
	
}
print_r($arr2).PHP_EOL;
	# code...


$arr3=["1"=>"Mon", "2"=>"Tue","3"=>"wed"];
$arr4=$arr3;
print_r($arr4).PHP_EOL;


print "\nusing foreach loop\n";
$arr5=[];

foreach ($arr3	 as $key => $value) {
	$arr5[$key]=$value;


	# code...
}
print_r($arr5);





 ?>