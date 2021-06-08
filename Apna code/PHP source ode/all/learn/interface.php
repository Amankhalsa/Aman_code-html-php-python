<h1>Interface </h1>
<?php 
interface i1{

function dis1();

}
interface i2{

function dis2();

}
class demo implements i1,i2{
	function dis1(){
		echo "hello from child class mehod 1<br>";
	}
	function dis2(){
		echo "hello from child class mehod 2<br>";
	}
function __destruct(){
	print "<h2>Using this we can use multiple inheritance concept<h2>";
}

}

$obj= new demo();
$obj->dis1();
$obj->dis2();

 ?>