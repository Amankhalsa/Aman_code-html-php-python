<?php 
require_once "Car.php" ;

require_once "Speed.php";
class Sportscar implements Car,Speed{
		public $name;
		public $color;
		public $model;
		public $carspeed;

public function name(){
			echo "car name : ".$this->name."\n";
			return $this;
	}
	function setname($name){
		$this->name=$name;
		}	
//set method 
	public function model(){
			echo "car model : ".$this->model."\n";
			return $this;
	}
//set method 	
		function setmodel($model){

		$this->model=$model;
			
		}
	public function color(){
			echo "car color : ".$this->color."\n";
			return $this;

	}
//set method 

 function setcolor($color){
 		$this->color=$color;
 		}


public	function setspeed($carspeed){
	$this->carspeed=$carspeed;
	return $this;
}

 public	function getpeed(){

 	echo "This car speed  is : ".$this->carspeed."\n";
 	print "\t\t\tThanks for using this interface method.... \n\n";
 		return $this;
 }

} 

 ?>