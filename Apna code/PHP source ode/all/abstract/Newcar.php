<?php 
abstract class  car{
	
	public $speed;
abstract function checkspeed($speed);

}
class Sports extends Car {
	function checkspeed($speed){
		$this->speed=$speed;
		echo "Your car speed is $this->speed km/h\n";
		}		
}

class horn extends car{
	function blowhorn(){
			echo "************ Side please ************  \n";
				
	}

	function checkspeed($speed){
		$this->speed=$speed;
		if ($this->speed>=100) {
			echo " \t\t\t**** Po po po ****\n\n";			
		
		}else {echo "dont worry this is normal speed \n";} 


		echo "Now this car speed is $this->speed Km/h\n";
	}
}
$obj=new Sports();

$obj->checkspeed(100);
$obj2= new horn();

$obj2->blowhorn();
$obj2-> checkspeed(180);
echo "\n\t\t";
$obj2->blowhorn();

 ?>