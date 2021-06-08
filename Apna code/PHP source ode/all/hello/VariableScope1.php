<!DOCTYPE html>
<html>
<head>
	<title>Local Variable</title>
</head>
<body>
<h1>Understand Local Variable Concept</h1>


<?php 
// variable define out of function no scope in function 
$name="Amanpreet singh";

//calling to  function
print_name();
function print_name(){
//same name variable define in inner part of function 
	echo "<h1>php is server side scripting language </h1>";
	
}


// outer part of function will execute 
echo "\n<h1>$name</h1>\n";



 ?>
</body>
</html>