<?php 
//echo "\nusing var dump\n";
$month=[
"January","February","March","April","May","June","July","August","September","October","November","December"
];
//var_dump($month).PHP_EOL;
echo "\nMonth Using foreach loop \n";
$counter=0;
foreach ($month as $value) {
	echo " \t[$counter] => $value".PHP_EOL;
	$counter++;
	# code...
}
print "\nDays \n";
$days=['Sunday', 'Monday',7.4,'Wednesday',true,'Friday',5];
$counter=0;
foreach ($days as $value) {
	echo "[$counter] => $value".PHP_EOL;
	# code...
	$counter++;
}
var_dump($days);

 ?>