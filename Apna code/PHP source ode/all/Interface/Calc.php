<?php 
//example of interface
// here interfce defined  
interface A {


//only method should be define 
	function add($a,$b);
}
// 2nd number interface 
interface B{


	function sub($c,$d);
}

// drived class 
//with two interface 
class C  implements  A,B{
// implements parent class methods 
	function add($a,$b){
		echo "Addition is :";
		echo $a+$b ."\n";


	}

//2nd method for sub 
	function sub($c,$d){
		echo "Subtraction is :";

		echo $c+$d. "\n";


	}

}
$obj= new C();
// calling both methods 
$obj->add(15,25);
$obj->sub(19,27);



 ?>