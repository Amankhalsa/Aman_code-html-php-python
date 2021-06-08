<?php 
// mixed arrays
//example 1
$arr =[];
$arr[0]=1;
$arr[3]="string";
$arr[5]=true;
$arr[10]=5.2;
var_dump($arr).PHP_EOL;
//example 2
$arr[100]=100;
$arr[]=102;

var_dump($arr).PHP_EOL;
 //example 3
 $arr[0]="Previous value is 1 now changed";
 var_dump($arr).PHP_EOL;
 //example 4
 foreach ($arr as $value) {

echo "$value".PHP_EOL; 	# code...
 }
 //example 5
 $arr[1]="string 1";
 
 foreach ($arr as $value) {

echo "$value".PHP_EOL; 	# code...
 }

//example 6
if (empty($arr[1])) {
	echo "empty";
	# code...
}else {echo "Not empty";
}

 ?>