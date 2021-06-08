<center>
<h1>How to use Super Global Variables</h1>
<?php

				//................ sample 1 ................

// define as a globals variable 
global $name;

$name = "<h2>Amanpreet singh khalsa</h2>\n\n";
// by using $globals[''] method we can access
echo $GLOBALS ['name'];

 echo "<hr> example 2nd <br>\n\n ";
 
 				//................sample 2................ 

echo "<h1>Predefined Super Global Variables </h1> ";
/*echo "$_SERVER['PHP_SELF']";
  super variable should be upper or supportable syntext

Predefined Super Global Variables*/
 echo "\nfilename :". $_SERVER['PHP_SELF'];   // super globals variable is here 


 				// ................sample 3................ 

echo "\n\n<h2>Access Global Variables using Super<br> \nGlobal Variables from Functions.
</h2>";

echo "<hr> example 3rd <br>\n\n";
 global $message;
 $message ="aman and preet";
 function print_name(){
 	//Access Global Variables using Super Global Variables from Functions.
echo $GLOBALS['message'];  // super globals variable is here 

 }
// calling to function 
 print_name();