<?php  
//example of data absract 
abstract class Shapes{


	protected $color ='';
	abstract function areacalculate();
	public function getcolor(){
			return  "\nColor is :". $this->color;
	}

}
class Rectangle extends Shapes{
public $length;


public $width;

function __construct($color,$length,$width){

	$this->color=$color;
	$this->width=$width;
	$this->length=$length;

} 
function areacalculate(){
//	echo ;

	return "Rectangle Area is :".$this->width*$this->length;

}



} 
class Circle extends Shapes{
	public $radius;

function __construct($color, $radius){


	$this->color=$color;
	$this->radius=$radius;

}
function areacalculate(){
	//echo ;
		return "Circle Area is :".$this->radius*3.14;
}


}

$rec=new Rectangle("red",10,30);
echo $rec->areacalculate();
echo $rec->getcolor();
echo "\n";
$cir=new Circle("blue",30);
echo $cir->areacalculate();
echo $cir->getcolor();

?>

