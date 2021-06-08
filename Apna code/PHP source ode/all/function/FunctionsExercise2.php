<?php 
declare(strict_types=1);
function calc(int $a, int $b, String $operation= "all"){


	switch ($operation) {

		case "add":
			$result= $a+ $b;
			echo "Addition is : $result ".PHP_EOL;
			break;
				case "subtract":
			$result= $a- $b;
			echo "Subtract is : $result ".PHP_EOL;
			break;
					case "multiply":
			$result= $a* $b;
			echo "Multiply is : $result ".PHP_EOL;
			break;
					case "divide":
			$result= $a/ $b;
			echo "Divide is : $result ".PHP_EOL;
			break;
		default:
		$result= $a+ $b;
			echo "Addition  : $result ".PHP_EOL;
				
			$result= $a- $b;
			echo "Subtract  : $result ".PHP_EOL;
		
			$result= $a* $b;
			echo "Multiply  : $result ".PHP_EOL;
			
			$result= $a/ $b;
			echo "Divide  : $result ".PHP_EOL;
			# code...
			break;
	}



}
calc(4,2,"add");
calc(4,2,"subtract");
calc(4,2,"multiply");
calc(4,2,"divide");
echo "\nfrom Default\n";
calc(8,2);
 ?>