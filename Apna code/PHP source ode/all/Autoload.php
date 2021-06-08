<?php 



function __autoload($lass){


	require "autoload/".$lass.".php";
}
$obj= new First(10,15);
echo $obj->calc();
echo "\n";
$obj2= new Second(25,5);
echo $obj2->calc(); 
echo "\n";
$obj3= new Division(25,5);
echo  $obj3->calc(); 
echo "\n";
$obj4= new Multiple(12,5);
echo $obj4->calc();
echo "\n";

 ?>