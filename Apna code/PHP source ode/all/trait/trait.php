<?php 

trait DatabaseHelper{

// this is a good example to use multiple class 

	function setrecoreds(){

		echo "here is your data \n";
	}
}

class student {


use DatabaseHelper;
	function  getdbrecords(){
		$this->setrecoreds();
	}
}

$obj= new student();
$obj->getdbrecords();
 ?>