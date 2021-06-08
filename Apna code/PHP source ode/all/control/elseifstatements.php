<?php 
	

	//1) Check for Odd or Even Numbers and Print it.
    // Using 'else if'

			$number=11;
			$result= $number%2;
			if ($result){

				echo " odd number";


			} else if (!$result){
				echo "Even number ";
			}
 
    //Check if input_number is greater than 10
    //Recommended 'elseif'


			$input_number=9;
			if($input_number>10){
				echo " \nNumber grater then 10";


			}else if ($input_number==10){
				echo "\nNumber equal to 10";

			}else {
				echo "\nNumber less then 10  ";
			}
echo "\n\n\t\t";
			$number2=10;
			$result2= 29%2;
			if (!$result2){

				echo "even ";


			} 
			else { echo " odd ";}
 ?>