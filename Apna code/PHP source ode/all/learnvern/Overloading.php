<?php 

class A {

function __set($data,$value){


	echo "Data is :".$data ."<br>";
	echo "Value is :".$value ."<br>";

}

}
$obj =new A();
$obj->Value=20;
 ?>