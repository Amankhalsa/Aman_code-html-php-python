<?php 

trait DatabaseHelper{

// this is a good example to use multiple class 

	function setrecoreds(){

		echo "here is your data \n\n";
	}
}


trait Removespaces{

// this is a good example to use multiple class 

	function Removespaces($str){
		return trim($str);
	}
}

class student {


use DatabaseHelper;
use Removespaces;

	function  getdbrecords(){
		$this->setrecoreds();
		echo $this->Removespaces("    This is a good example of multiple    \n\n");
		echo "\n    More spaces in this line     \n\n";
	}
}

$obj= new student();
$obj->getdbrecords();
//$obj->

 ?>