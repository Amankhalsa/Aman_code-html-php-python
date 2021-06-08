<!DOCTYPE html>
<html>
<head>
	<title>Int data type</title>
</head>
<body>
<h2>1) Understand how to define and work with Integers</h2>
<?php 
		   /*
     * Integers are whole numbers
     * Integer values does not have decimals.
     * Integers could have + or - values
     * Integer Variable can hold Octal (base 8), Hexadecimal(base 16) and Binary (base 2) Values
     * Every Platform will have limited integer number to be defined.
     * Constant PHP_INT_SIZE can be used to find out the integer limit.
     *
     */
    //Define and Print Integer Variable
 			$num1=10;
 			echo $num1;
echo "<br><br>Hexadecimal<br><br>";
 		//Hexadecimal Variable
    //https://www.binaryhexconverter.com/decimal-to-hex-converter
			 $val=0x216E639E1; //8974121441
			  echo $val . PHP_EOL;

echo "<br><br>int ot string <br><br>";
			  	// int ot string 
			  $v1 =10;
			  $v2="20";
			  echo $add=$v1+$v2;

echo " <br><br>negative result <br><br>";
// negative result 
			$marks=-5;
			echo $marks+1;
$marks=-5;
 			echo "<br><br>Add <br><br>";
// devide mul add
 			$a1=10.2;
 			$b2=5;
 			$c2=2;
 			$d1=6;
 			$F=$a1/$b2*$c2+$d1;
 			echo "RESULT IS :".$F;
 	
 	ECHO "<BR> PHP_INT_SIZE : ";
 	
 	ECHO PHP_INT_SIZE;
 	
 	ECHO "<BR>PHP_INT_MAX : ";
 			
 	echo PHP_INT_MAX . PHP_EOL;
 	echo "<hr>";
 	$value="922337203685477580";
 	print "$value";
 
 	echo "<br>";
 	$myno=2;
 	$hello =$myno*$value;
 		echo "Long valu using string :". "<span style=background-color:yellow;font-weight:bolder;>$hello</span>";
 ?>
</body>
</html>