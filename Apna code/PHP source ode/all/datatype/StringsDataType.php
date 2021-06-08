<!DOCTYPE html>
<html>
<head>
	<title>String data type</title>
</head>
<body>
<blockquote>
<h2>Understand how to define and work with Strings Data Type.</h2>

<?php 
	  /*
     * Strings are defined in Double quotes and Single Quotes.
     * Double Quotes string will interpolate variables values and single quote does not.
     * No limited to how much string variable holds but limited with system memory.
     * Use Escape Character to escape double quotes inside double quotes and other characters.
     * String methods are available to work with string manipulation
     *
     */
 // define and print string 
		  echo "<h2>define and print string </h2>\n\n\t";
		  $name1= "John smith1";
		  $name2= "John smith2";

		  $store=$name1." -". $name2;

		  echo $store; 
// using double quotes
		  	print "<b>using double quotes</b><br>";
		    echo "$name1 and  $name2" . PHP_EOL . "<br>\n\n";
// WHEN WE USE SINGLE QUOTES
	   	 echo  " <b>when we use single quote variable as it print </b> <br>";
	     echo '$name1 and  $name2' . PHP_EOL . "<br>\n\n";

	     $name3 = "This is a \"special\" string";

// double  quotes 
	     echo " <b>with double  quotes </b>  <br>";

	 	 $name4 = 'This is a \'special\' string';
	     echo $name3 . PHP_EOL . "<br>\n\n";
	     // Single quotes 
	     echo " <b>with Single quotes</b>   <br>";
		 echo $name4 . PHP_EOL . "<br>\n\n";

			$name5 = "\t\t T\h\t\s\ php is";
		echo $name5;
		echo "<hr>";

    	echo strlen( $name5 ) .PHP_EOL;
//How to Search the Manual https://www.php.net/ for String Methods.


 ?>
 </blockquote>
</body>
</html>
