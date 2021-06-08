<?php 
class A {

function A(){
echo 	"constructor 1 <br>";
}

}
class B extends A{

	function __construct(){
		parent::a();

echo 	"constructor 2 <br>";

	}
	function __destruct(){
		echo "value destroyed ";
	}
}
$obj =new B();

 ?>