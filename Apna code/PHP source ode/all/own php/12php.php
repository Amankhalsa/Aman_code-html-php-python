<!DOCTYPE html>
<html>
<head>
	<title> while loop in php </title>
</head>
<body>
<h1><mark> Advance While Loop</mark>  </h1>
<table border=1 width="30%"> <tr> <td>
<?php
$i=2;
$j=1;
while($i<=20 ){
    echo "2 x $j = $i  <br>";
    $i+=2;
    $j++; } ?>
<td>
<?php
$l=1;
 $k=3;
while($k<=30){
	echo  "3 x $l = $k  <br>";
    $k+=3;
    $l++;
}
?> </td>	
</td></tr></table>
<!--<?php 
		// we need head continusily 3 time 
		// we caont flip .
		$head=0;
		$flipcount=0;
		while (0<3){
			$flip=rand(0,1);
			$flipcount++;
			if($flip){
				$head++;
				echo "<h3> HEAD </h3>";
			} else{
				$head=0;
				echo "<h3>--</h3>";
			}
		}
				echo "we flip  the coin $flipcount times";
?>--->
</body>
</html>