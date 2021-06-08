<?php 

    //continue will skip the next line and go to next loop
    //1) Print Even Numbers using While Infinite Loop and Break after 10 numbers.


		$val=0;
		while ( true) {
			$res=$val%2;
					if ($res==1){
						$val++;
						continue;
									}

			if ($val>=50){
				break;
							}
		echo "Even number $val \n";
		$val++;
	
	}

 ?>