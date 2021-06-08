<?php 
class getdata{


	public $a;
	public $b;
	function __construct(){
	 	$this->a=$_REQUEST['height'];
	$this->b=$_REQUEST['base'];

	}
	// public function method1(){

	// 	$this->a=$_REQUEST['height'];
	// 	$this->b=$_REQUEST['base'];

	// }

}
class calc extends getdata {
	public $area;
	public function method2(){
$this->area=($this->a*$this->b)/2;
echo "Area of triangle is: ".$this->area;

	}

	//example of destruct
	function __destruct(){
		echo "<br>Thanks ";
	}


}

if (isset($_REQUEST['submit'])) {
$obj= new calc($a,$b);
//$obj->method1();
$obj->method2();

	# code...
}


 ?>