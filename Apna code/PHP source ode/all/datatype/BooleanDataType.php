<?php 
    /*
     * true or false / TRUE OR FALSE can be used to assign a boolean variable
     * Boolean are literals are case insensitive - True or true or TRUE are same.
     * true = 1 and false = 0 when displayed with echo
     * Integer variable with value 0 is false and anything else is true
     * String variable with value "0" is false and anything else is true
     * Boolean is used in condition to check something.
     * Operators which results into boolean conditions
     */

    		// defien and print boolean 
    			$flag1=true;
    			$flag2=false;

    			echo ($flag1)? " True " : " False ";

   				Echo PHP_EOL ."<br>";

   				echo ($flag2)? " True " : " False ";

   				Echo "<br>\n\nPrint boolean variable \n\n<br>". PHP_EOL;
// print boolean value 
   				print " True ".$flag1 .PHP_EOL ."<br>";

   				print " False ".$flag2 .PHP_EOL ."<br>";
// using string 
   				$userlog=True;
   				$username="john smith";

   				print ($userlog && $username)? " Loged in ": " Not loged in ";
   				
 // using value 
   					echo "\n\n<h3> when we use value </h3>\n\n";
   					$num1=01;
   					$num2=1;
   					echo ($num2 && $num1)? " True ": " False";


					echo "\n\n<br> <br> \n\n\n";
// usimg operator 
					$userlog=True;
   					$username="john smith";

   					print ($userlog === "john smith")? " Loged in ": " Not loged in ";
					echo "\n\n<br> <br> \n\n\n";

					// 
					$marks=1;
					echo ($marks)?" has value ": " Has not value ";

echo "\n\n<br> <br> \n\n\n";

  			  //Operators results into Boolean condition
					
					$name= "John";
					echo ($name === "John")? " yes john" : " Not john";

	

 ?>		