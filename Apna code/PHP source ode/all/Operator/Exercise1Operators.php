<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
    <style type="text/css">
    	 h2{
    	 	color: blue;
    	 }
    </style>
</head>
<body>

    <h1>Exercise 1: How to Use the Operators</h1>

    <h2>Add two numbers using Arithmetical Operators:</h2>
    <?php 
    		$firstnumber=10;
    		$secondnumber=20;
    		$add= $firstnumber+$secondnumber;
    		echo "Result is : $add \n <br>";

    			 ?>

    <h2>Find Student passed or failed using Conditional Operatos:</h2>
    <?php 
    		$minmarks=33;
    		$achivedmarks=56;
    		$result =($achivedmarks>=$minmarks)? "Pass":"fail";

    			echo "You are :".$result;


    			 ?>
    			<br> 2nd example <br>
    			 <?php 
    			  			$Student="passed";
    			  			echo ($Student==="passed")?" Student pass":"student fail";
    			  		?>

    <h2>Show a number is even or odd using Comparison Operators:</h2>
    			<?php  
    					
    						$number1=10;
    						$result=$number1%2;
    						echo ($result==0)?" Even number " :" Odd Number ";
    					?>


    <h2>Check if user has access and login rights using Logical Operators:</h2>
    				<?php 
    						$userlogin=true;
    						$useraccess=true;
    						echo ($useraccess && $userlogin)? "User  has login access ": "User does not access";
    						 ?>

    <h2>Assign a integer value and increment by 10 using Assignment Operator:</h2>
    				<?php 
    						$value= 10 ;
    						$value+=10;
    						echo $value;
    						 ?>

</body>
</html>