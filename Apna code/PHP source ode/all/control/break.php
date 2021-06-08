<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		.aman{
			transform: rotate();
		}

	</style>

</head>
<body>
<div class='aman'></div>
</body>
</html>
<?php 
//brak 
// while loop 
/*while ( true) 
{

	echo "value is :$value <br>";
	$value++;
	if ($value>=10){
		break;
	}
	# code...
}*/

// do while loop 
print "<br> Do while loop <br>";
$t="Aman";
$value=1;
do {
	# code...
	echo "$t this Value is :$value <br>";
	$value++;

	if ($value >=10)
		{break;}

} while (true);
print "<br> for loop <br>";
for ($i=2; $i <=10 ; $i++) {
		$j=$i%2;
		if ($j==0) {print "Even number is $i <br>";}
		
	# code...
}

 ?>

