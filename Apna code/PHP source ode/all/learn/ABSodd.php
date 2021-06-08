<?php 
abstract class absdefined{
abstract function method1();
abstract function method2();
}
class oddeven extends absdefined {
	public $i1;
	function method1(){
		$this->i1=$_REQUEST['num1'];
	}
	function method2(){
		if($this->i1%2==0){
			Echo "<h1>Given no is Even</h1>";
		}else {
			Echo "<h1>Given no is odd</h1>";
		}
	}

}
if (isset($_REQUEST['submit'])) {
	$obj=new oddeven();
	$obj->method1();
	$obj->method2();

}

 ?>