<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 2: How to Use the Operators</h1>

    <h2>Decrement a number using Decrement Operator:</h2>
    		<?php 
    				$number=10;
    				echo --$number;
    			 		?>

    <h2>Show the negative of 5 using Bitwise Operator:</h2>
    		<?php 
    				$value=5;
    				echo ~$value;
    				 	?>
    <h2>Execute a dos or linux command using Execution Operator:</h2>
    		<?php 

    			echo `dir`;
    					 ?>
    <h2>Raise and Error and control it using Execution Operators:</h2>
    		<?php 
    				@$value=1/0;
    				 echo "Error not comes";
    				 	?>

    <h2>Show an example of Operator Precedence Operator:</h2>
    		<?php 
    				$value=false;
    				$value2=false;
    				echo ($value  && $value2)?"True":"false";
    						 
    						 ?>

</body>
</html>
