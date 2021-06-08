<?php 
abstract class Car{
	abstract function applybreack();
	//if you define here you need to use it in drived class 
	// abstract function hello();
	// abstract function speed($a);


	
}
class Sportscar extends Car {
	//method 1
	function hello(){
			print "from car class \n";
		
					}
	//method 2 
	 function applybreack(){
			echo "Breack apply method is called now\n"	;	 	
	 }	
	//method 3
	 function speed($a){
	 	$this->a=$a;
	 	if ($this->a>=100) {
	 		echo " tee teen tee \n";
	 		# code...
	 	}else {print "\nDon't worry  -->$this->a km/h is normal speed\n\n";}
	 	echo "car speed is -->$this->a km/h\n";
	 }

}
$car1=new Sportscar();
$car1->hello();
$car1->speed(90);
$car1->applybreack();
 ?>