		<?php 

		    /*
		     * 1) Syntax of if and else condition
		     * 2) Check if the inputs given by user is correct.
		     * 3) if condition statement without braces.
		     * 4) Check if Student is passed or failed.
		     *
		     */


		    	//2) Check if the inputs given by user is correct.

		    		echo " 1st example \n\n";
		    	$input1 = " Some text is here ";
		    	$input2=54;

		    	if ($input1==true)
		    	{

		    		echo " correct input  \n\n";

		    	}
		    	else {
		    		echo " wrong  input  \n\n";
		    	}

		    		echo " \t\t2nd example \n\n";

		    		if (isset($input1) && !$input1){

		    			echo " is not empty from if \n\n";

		    		}else {
		    			echo " is empty from else  \n\n";
		    		}

		    		echo " \t\t3rd example \n\n";

		    	if ($input1 !=" ")
					{

		    		echo " input1 is not empty  if part \n\n";

		    		}
		    	else {
		    		echo " input1 is  empty from else  part \n\n";
		    			}

		    		echo " \t\t4th example \n\n";

					if(empty(!$input1)){

						echo " input1 is not empty  if part \n\n";

		    		}
		    	else {
		    		echo " input1 is  empty from else  part \n\n";
		    			}

		    		echo " \t\t5th example \n\n";
		    		if ($input2>=34){
		    		echo " grater the 34 ";

		    		}else
		    	 {" less then 34 ";}



		 ?>