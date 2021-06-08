<?php 

    //Index Arrays are sequence array of element with integer index numbers.
    //Mostly it is in sequence.
    //Index starts with 0
    //New elements get the index of highest index + 1 number.
    //You can always break the sequence and add new elements to future index.
//index array example 1

$arr=[1,2,3,4,5];

var_dump($arr);
//example 2
$arr[100]=100;
//example 3
$arr[]=102;

var_dump($arr);

//with  string values 
$arr=["sun","mon","tue","wed","thurs","fri","sat"];

var_dump($arr);

 ?>