<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<h1> perameter variable </h1>
<?php
	
	function fruitcal($fruit,$qyt,$price){

		$totalprice	= $price*$qyt;
			echo 'The price of ' .$fruit. ' is ' .$totalprice;
	} //function end here 
	fruitcal('apple',25,15.10)
	
	?>
<body>
</body>
</html>