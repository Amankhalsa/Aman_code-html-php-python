
<?php 
// class Calc{
// 	static public $result;
// 	static function add($a,$b):int{
// 		echo " Addition is :";
// 		$result =$a+$b;
// 		return $result;
// 	}
// }
// Calc::$result;
// echo Calc::add(10,15);
// echo "\n";
// echo Calc::$result=Calc::add(1,5);;

//using self keyword 
class Calc{
	static public $result;
	static function add($a,$b){
		//echo " Addition is : $result";
		self::$result =$a+$b;
		
	}
}
echo Calc::add(10,15);
echo " Addition is : ". Calc::$result;
echo "\n<br>";
echo Calc::add(17,4);
// using class name we can access result property 
echo " Addition is : ". Calc::$result;


 ?>