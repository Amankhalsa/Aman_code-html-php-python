<?php 
 //using strlen print some statements 
$name="amanpreetsingh";

echo " Length is = ".strlen($name).PHP_EOL;

$name="";

echo " Length is = ".strlen($name).PHP_EOL;

$name=null;
echo " if variable is null then Length is = ".strlen($name).PHP_EOL;


$name=10;
echo " if variable have  number  = ".strlen($name).PHP_EOL;

$name="10";
echo " if variable number  is string = ".strlen($name).PHP_EOL;
//using if condition 
$name="500";
if (strlen($name)>0) {

	echo " length is =".strlen($name).PHP_EOL;
	# code...
}else {
	echo " length is not avilable ";
}

 ?>