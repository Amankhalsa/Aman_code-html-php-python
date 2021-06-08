<!DOCTYPE html>
<html>
<head>
	<title>Case Sensitivity</title>
</head>
<body>
	<center>
	<h1>Understand the PHP Case Sensitivity</h1>
<?PHP 
// 1st sample upper case 
    echo "Hello world! <br>\n";
    ECHO "How are you \n";

 ?>
<hr>

 <?php 

// sample 2nd lower case 
echo "Hello world! <br>\n";
    ECHO "How are you \n";

  ?>
<hr>
<?php 
// 1st example of function case Sensitivity
function  name_print(){


	echo "my name is Aman";
}
//calling to function 1st 
name_print()
 ?>
<hr>
<?php 

// 2nd example of function case Sensitivity
function  name_prin(){


	echo "_Last wxample of Sensitivity using function_";
}
//calling to function 2nd 
  NAME_PRIN()
 ?>
</center>
</body>
</html>
