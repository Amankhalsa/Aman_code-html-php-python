<?php 
    //Print Odd Numbers from 1 to 10.
    /*
        for(initialization; condition; increment){
            // Code to be executed
        }
    */
  echo "  sample 1\n\n";
        for ($value=1;$value<=15;$value++)
        {
        		$result = $value%2;
        if ($result) 
        {
        
        		echo " Odd number " .$value	 ."\n";
        	# code...
        }

        	
        }
        // sample 2 pree increment 
        echo "\n  \n pre sample 2\n\n";
        $value=1;
        for (;$value<=10;++$value)
        {
        		$result = $value%2;
        if ($result>0) 
        {
        
        		echo " Odd number " .$value	 ."\n";
        	# code...
        }
        
        	
        }
        // sample 3

        echo "\n \n outer sample 3 \n\n";
        $value=1;
        for (;$value<=10;)
        {
        		$result = $value%2;
        if ($result>0) 
        {
        
        		echo " Odd number " .$value	 ."\n";
        	# code...
        }
        $value++;
        	
        }

        echo "\n \n  sample 4 \n\n";
        $value=1;
        for (;$value<=10;)
        {
        		$result = $value%2;
        if ($result==0) 
        {
        
        		echo " Even  number " .$value	 ."\n";
        	# code...
        }
        $value++;
        	
        }





 ?>