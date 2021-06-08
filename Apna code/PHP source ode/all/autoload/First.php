<?php 

class First {



	function __construct($a,$b){

		$this->a=$a;
		$this->b=$b;

	}
	function calc(){

echo "Addition of value  $this->a, $this->b is = ";
		return $this->a+$this->b."\n";
	}
}

 ?>