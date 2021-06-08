<?php 

		//1) Check for Odd or Even Numbers and Print it.


			$number=10;
			$result= $number%2;
		
			switch ($result) {
				case '1':
					# code...
				echo "odd number  ";
					break;
				case '0':
				echo "even number  ";
			break;
				default:
					# code...
				echo "not match ";
					break;
			}

echo "\n\n";
 ?>
 <?php 

 				$DAYS='5';
 				switch ($DAYS) {
 					case '1':
 						# code...
 					echo "Monday";
 						break;
 					case '2':
 					echo "Tuesday";
 						break;
 					case '3':
 					echo "Wednessday";
 						break;
 					case '4':
 					echo "Thursday";
 						break;
 					case '5':
 					echo "Friday";
 						break;
 					case '6':
 					echo "Satday";
 						break;				
 					default:
 						# code...
 					echo "not match";
 						break;
 				}
echo "\n\n";
  //Recommeded to use if for conditional
 				 $input_number = 5;
    switch(true) {
        case $input_number > 10:
            echo 'Number greater than 10' . PHP_EOL;
            break;
        case $input_number  == 10:
            echo 'Number equal than 10' . PHP_EOL;
            break;
        default:
            echo 'Number less than 10' . PHP_EOL;
    }
  ?>
