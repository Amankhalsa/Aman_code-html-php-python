<?php 
class Bank {
protected  $amt;
public $dip;
public $bal;
 function dis1(){
	print "from banks class\n";
}
function balance(){
	echo "your account balance is ".$this->bal;
}
}
class User extends Bank {
function dis1(){
	print "from user  class\n";
	// overide method 
	parent::dis1();
	
}
	function disposite($amt){
		$this->amt=$amt;
		$this->bal=$this->bal+$this->amt;
	}
}
$obj=new User();
$obj->dis1();
$obj->disposite(500);
$obj->balance();
 ?>