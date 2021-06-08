<?php
class Driver {
	
	private $updateinstruction= "User instructions";
	final function rundriver(){

	echo "executing the update instructions ".PHP_EOL;

	}
	//for access private properties 
	function setter($updateinstruction){
		$this->updateinstruction=$updateinstruction;

	}
	function getter(){
return $this->updateinstruction;

	}
}
$obj=new Driver ();
$obj->rundriver();
echo $obj->getter();
 
 ?>	
