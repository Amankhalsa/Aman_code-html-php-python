<?php 
		    //function name    ( parameter type   parameter name ) : returned type
function add($a,$b):int{
	$addition =$a+$b;
	return $addition;
}
echo "Result is: ".add(3,2);
echo "\n\n";

function get_even($limit):array{
		
		$arr=[];
		 
		for ($i=0; $i <=$limit ; $i++) {

			if ($i%2==0) {

				$arr[]=$i;

			 } 
		
		}
		return $arr;

}
 
 $getarrayvalue =get_even(10);
echo "Array values: \n";	print_r($getarrayvalue).PHP_EOL;


 ?>