<?php 

/*
6 functions to sort and array
    1) Sort Indexed Arrays - Ascending
    2) Sort Indexed Arrays - Descending
    3) Sort Associative Arrays - Ascending - By Values
    4) Sort Associative Arrays - Descending - By Values
    5) Sort Associative Arrays - Ascending - By Key
    6) Sort Associative Arrays - Descending - By Key
*/
//index arrays 

$arr=[5,3,2,0,1,4];
print_r($arr).PHP_EOL;
print "\nAscending order\n";
//Ascending order 
sort($arr);
print_r($arr).PHP_EOL;
print "\n Descending order \n";
// Descending order 
rsort($arr);
print_r($arr).PHP_EOL;

$arr1=["3"=>"John", "5"=>"Ajit","2"=>"Robin","1"=>"Gurjoot"];
print_r($arr1).PHP_EOL;
print "\nAssosiated array Ascending order\n";
//Ascending order
asort($arr1).PHP_EOL;
print_r($arr1).PHP_EOL;
print "\n Assosiated array Descending order \n";
// Descending order 
arsort($arr1).PHP_EOL;
print_r($arr1).PHP_EOL;
print "\nKeys Ascending order\n";
// key sorting method 
//Ascending order
ksort($arr1);
print_r($arr1).PHP_EOL;
print "\n keys Descending order \n";
// Descending order 
krsort($arr1);
print_r($arr1).PHP_EOL;

 ?>