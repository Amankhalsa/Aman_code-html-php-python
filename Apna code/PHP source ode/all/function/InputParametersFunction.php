<?php 
//1) Learn to pass paramters to Function and Validate them.
    
    declare(strict_types=1);

	function print_odd_num(int $limit, $skip_num){
	for ($i=0; $i <=$limit ; $i++) {
			if ($skip_num==$i) {
				continue;
			 } 
			 if($skip_num && $i>10){
			 					break;
						 		}
			 if ($i%2!=0){	
			 		echo "Odd numbers : $i".PHP_EOL;
				}

			}
		}

	print_odd_num(30, "21");
	echo "\n 2nd function \n\n";
   	//declare(strict_types=1);
    //Works on PHP 7
    function printOddNumbers(int $limit){
        for ($index = 0; $index <= $limit; $index++){
            if( $index%2 != 0){
                echo "Odd Number: $index" . PHP_EOL;
            	}
            	 if($limit>10){
			 				break;
								 }
        	}
    	}
    //Call the Function
  	printOddNumbers(10);
    //This will raise an Error
    //printOddNumbers("20");

