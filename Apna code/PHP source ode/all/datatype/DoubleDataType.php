<!DOCTYPE html>
<html>
<head>
	<title>DataType Double</title>
</head>
<body>

<h2>Understand how to define and work with Double or Float.</h2>
	
	<?php 
	  /*
     * Decimals are real numbers
     * Decimals have decimal points
     * Use round() method with precision
     */

	// define and print decimal number 
echo "Define and print decimal number  <br>";
		$score=78.54;
		echo $score;

echo "<br><br>Negative decimal number <br>";
	// Negative decimal number 

		$tempval=-40.25;
		echo $tempval;
echo "<br><br>round value <br>";
		
	// round value 
		$value= 4.89;
		echo round($value);
echo "<br><br>Compare two value <br>";
	//compare two value 
		$price=1.50;
		$bid=1.50;
		echo (abs($price-$bid)<0.1)?" Accepted ":" Rejected ";

	 ?>
</body>
</html>