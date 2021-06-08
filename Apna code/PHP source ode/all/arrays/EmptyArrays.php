<?php 
echo "Empty Arrays\n";

//example 1
$arr=[];
var_dump($arr).PHP_EOL;

print_r($arr).PHP_EOL;

// if condition check 
if (empty($arr)) { echo "Array is empty";}
else {echo "Array is not empty";}
echo "\n\n";
//example 2
$arr[0]=10;
var_dump($arr).PHP_EOL;

// if condition check 
if (empty($arr)) { echo "Array is empty";}
else {echo"Array is not empty";}
echo "\n\n";
//example 3

echo "example 1 array\n";

$arr=10;

var_dump($arr).PHP_EOL;

echo "example 2 array\n";

$arr=[10];

var_dump($arr).PHP_EOL;
//print_r($arr).PHP_EOL;

echo "example 3 array\n";

$arr[0]=[10];
//example 4
var_dump($arr).PHP_EOL;
//print_r($arr).PHP_EOL;

$arr=[10];
var_dump($arr).PHP_EOL;
// if condition check 
if (empty($arr)) {
	echo "Array is empty";}
else {echo "Array is not empty";} 
echo " \n\n when array will reset \n\n";
$arr=[];
if (empty($arr)) {
	echo "Array is empty";}
else {echo "Array is not empty";} 

?>