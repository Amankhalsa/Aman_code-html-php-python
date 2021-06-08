<!doctype html>
<html>
<head>
    <title>
        Constants
    </title>
</head>
<body>

    <h1>Exercise 2: Define and Display Constants</h1>

    <h2>String Constant:</h2>
   		 <?php 		
   		 		@define (hello, "this from string constant");
    			print hello;
    			
    				 	?>

    <h2>Integer Constant:</h2>
    			<?php 	
                    @define (VER, 7.3) ;
    				print "php ".VER;
    			
    					?>

    <h2>Print Constant from Function:</h2>
    			<?php 
    					@define (MESG, "This for function ");
    					function print_constant()
    					{
    					echo MESG;
    						}
    					print_constant()
    				 	?>

    <h2>Display Magic Constant:</h2>	
    			<?php 
    					print __FILE__ ."<br>";
    					print __LINE__;

    				 	?>

</body>
</html>
