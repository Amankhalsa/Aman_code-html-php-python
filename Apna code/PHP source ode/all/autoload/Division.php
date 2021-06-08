<?php 

class Division {



	function __construct($a,$b){

		$this->a=$a;
		$this->b=$b;

	}
	function calc(){

echo "Division of value $this->a, $this->b is = ";
		return $this->a/$this->b."\n";
	}
}

 ?>