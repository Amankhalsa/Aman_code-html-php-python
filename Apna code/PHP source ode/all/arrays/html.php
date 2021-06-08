<!DOCTYPE html>
<html>
<head>
	<title>
		

	</title>
</head>
<body>
	<table align="center">
		<tr><td>
	<form method="get"  >
		
Hobby : 
Play :<input type="checkbox" name="chk1" value="Play" >
music :<input type="checkbox" name="chk2" value="Music">
Read:<input type="checkbox" name="chk3" value="Read"><
 Games:<input type="checkbox" name="chk4" value="Games">
<br><br><br>
		From <select name="city">
			<option>Delhi </option>
			<option>Punjab </option>
			<option>Haryana</option>

		</select>
<br><br><br>
		<input type="submit" name="submit">
	</form>
</td></tr>
</table>
</body>
</html>


<?php 

if (isset($_GET['submit'])) {
	$collect_city=$_GET['city'];
	$hobby1=$_GET['chk1'];
	$hobby2=$_GET['chk2'];
	$hobby3=$_GET['chk3'];
	$hobby4=$_GET['chk4'];

// MULTIPLE CHECK BOX CAPTURE 
$all[]= "$hobby1 $hobby2 $hobby3 $hobby4";

	# code...
}
echo $collect_city."<br>";


$studentlist=implode(", ", $all);
echo $studentlist.PHP_EOL;


 ?>