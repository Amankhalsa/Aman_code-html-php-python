<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<h1> Static  variable </h1>
<?php
function sayHello($username){
	 STATIC $user_count=1;
	echo 'hello & welcome ' .$username. ', you are user no '.$user_count. '<br>';
	$user_count++;
}
	
	
	sayHello('AMAN');
	sayHello('PREET');
		sayHello('SINGH');
		sayHello('KHALSA');
	?>

</body>
</html>