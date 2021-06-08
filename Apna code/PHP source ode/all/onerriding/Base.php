
<?php 
// php overriding using same name Function 
//base class 1st 

 class Base {
	public $name;
	public $sum;
	//constuctor 
	function __construct($a,$b){
				$this->a=$a;
				$this->b=$b;
				$this->sum=$sum;
				echo "value	$this->a & $this->b \n";
	}

function calc(){
		$this->sum =$this->a/$this->b;
		echo "Your Division  is : $this->sum \n" ;
	}
	}
//base class 2nd 

class Driveed extends Base {
		function calc(){		
		 $this->sum =$this->a*$this->b;
		echo "your Multiplication is : $this->sum \n";
		parent::calc();
}
}
//base class 3rd 

class Driveed2 extends Driveed {
		function calc(){
		 $this->sum =$this->a-$this->b;		
		echo "your Subtraction is : $this->sum \n";
		parent::calc();
}
}
//base class 4th 

class Driveed3 extends Driveed2 {
		function calc(){ // calc()defined in all class 
		 $this->sum =$this->a+$this->b;		
		echo "your Addition  is : $this->sum \n";
		parent::calc();
}
}
$obj= new Driveed3(15,05);  //object created 
//one calling function 
$obj->calc(); // one calling method 

echo "\n\t*** Thanks for using this method in php ***";


 ?>
 				
