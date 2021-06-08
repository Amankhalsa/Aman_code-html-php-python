<?php 

class Multiple {



	function __construct($a,$b){

		$this->a=$a;
		$this->b=$b;

	}
	function calc(){

echo "Multiplication of value $this->a, $this->b is = ";
		return $this->a*$this->b."\n";
	}
}

 ?>