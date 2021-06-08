<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

    <h1>Exercise 2: Easy Table Calculator</h1>
    <table border="1" cellpadding="5" cellspacing="3" align="left" >
    	<?php 
    

    		for ($i=1; $i <=10 ; $i++) { 

			echo "<tr>";	
            for ($j=1; $j <=14 ; $j++) { 
              echo "<td> $i x $j =".($i * $j)."</td>";
                    # code...
             }	
    
    			}

    	 ?>

</table>

</body>
</html>

