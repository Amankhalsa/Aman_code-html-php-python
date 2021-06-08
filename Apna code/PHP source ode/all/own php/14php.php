<!DOCTYPE html>
<html>
<head>
	<title>
		DO WHILE LOOP 
	</title>
</head>
<body>
<?php   $i=0; ?>
<h3> while... loop </h3>
<?php 
	while($i<3){ // in while we define in the  loop 
	echo  "while loop is here $i<br>";
	$i++;}
 ?>
 <!--- next loop is below --->
 <h3><mark>	Do....while loop  is pagal loop</mark> </h3>
 <h3><mark>	Always execute without permission</mark> </h3>
 <?php 
     $i=0;
 	do{ 
 	echo "do while loop is here $i<br> ";
 	$i++;
 	}
 	while($i<3) // condition define  in out of loop 
  ?>
</body>
</html>