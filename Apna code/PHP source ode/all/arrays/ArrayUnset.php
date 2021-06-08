<?php 

$arr=[1,2,3,4,5];
print_r($arr);
print "\n when unset \n";
unset($arr[4]);


print_r($arr);
print "\n when assigne value on [empty] \n";
$arr[]=5;

print_r($arr);
print "\n2nd array example\n";
$arr1=["first"=>1,2,3,4,"last"=>5];

print_r($arr1);
print "\nif unset \n";
unset($arr1["last"]);

print_r($arr1);
print "\nif again assigne \n";
$arr1["last"]=5;

print_r($arr1);
print "\nif assigne new value  \n";
$arr1[]=6;
$arr1[]=7;
print_r($arr1);
 ?>
