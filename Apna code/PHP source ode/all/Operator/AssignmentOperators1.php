<!DOCTYPE html>
<html>
<head>
	<title>Assignment operator </title>
	<style type="text/css">
		h2{color:blue;} body{margin-left: 50px ;max-width: 0 auto;} ol li{ display: block; padding: 10px;}
	</style>
</head>
<body>
	<ol>
		<li> =  Assignment Operator used to assign values </li>
		<li> += Add .= Assignment Operator    </li>
		<li>-=  Subtract Assignment Operator</li>
		<li>  =  Multiple Assignment Operator</li>
		<li> /=  Divide Assignment Operator</li>
		<li>%=  Modulus Assignment Operator </li>
</ol>
<?php 
    /*
     *  = - Assignment Operator used to assign values
     *  += - Add Assignment Operator - .=
     *  -= - Subtract Assignment Operator
     *  *= - Multiple Assignment Operator
     *  /= - Divide Assignment Operator
     *  %= - Modulus Assignment Operator
     *
     */
	echo "<h2>1) Assign value 10 to variable Marks and Use += operator</h2>";

		$marks=10;
		$marks +=$marks;
		echo $marks;
echo PHP_EOL ."<br>";

		$name= "John, smith ";
		echo $name;
echo PHP_EOL ."<br> .=  dot Assignment Operator = ";
// 2nd example    how to print with combine with coma 
		$name1="John";
		$name1.=", ";
		$name1.=" smith";
		echo $name1;
echo PHP_EOL ."<br>";
			


	echo "<h2>2) Learn How to Use -= and Use *= Operators</h2>";
				// using substraction 
			$value1=10;
			$value1-=2;
			echo "Substraction = ".$value1;

echo PHP_EOL ."<br> Multiplication = ";
			// using multiplication 
			$value1=10;
			$value1*=2;
			echo $value1;
		
echo PHP_EOL ."<br>";

	echo "<h2>3) Learn to Use /= and Use %=</h2>";


	// devide Use /=
	$devide1=51;
	$devide1/=2;
	echo "divison is = $devide1";

echo PHP_EOL ."<br>";


	// module  Use %=
			$module1=51;
			$module1%=2;
			echo "Module result is = $module1";
echo PHP_EOL ."<br> 1:10 ";



 ?>
</body>
</html>