<?php 

    declare(strict_types=1);    
    echo "function for odd number \n\n";
	function print_odd_num(int $limit, $skip_num=-1,$a=1,$b=2){
	for ($i=0; $i <=$limit ; $i++) {
			if ($skip_num==$i) {
				continue;
			 } 
			 
			 if ($i%2!=0){	
			 		echo "Odd numbers : $i".PHP_EOL;
				}

			}
		}

	print_odd_num(10);
	echo "\n 2nd function for even number \n\n";
   	//declare(strict_types=1);
    //Works on PHP 7
    function print_even_Numbers(int $limit, $skip_num=-1 ){
        for ($index = 0; $index <= $limit; $index++){
        	if ($index==$skip_num) {
        		# code...
        		continue;
        	}
            if( $index%2 == 0){
                echo "Even  Number: $index" . PHP_EOL;
            	}
            
        	}
    	}
    //Call the Function
  	print_even_Numbers(10);


 ?>