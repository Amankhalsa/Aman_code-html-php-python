<!DOCTYPE html>
<html>
<head>
	<title>table</title>
<style type="text/css">
	td{padding: 10px}
</style>
</head>
<body>
	<h1>do while loop </h1>
		<?php 
		// do while loop 
		echo "<table border=0><tr>";
		$value=1;
		do {
		echo "<td> ";
		echo $value++;
		echo "</td>";
			# code...
		} 
	// semicolon required 
		while ($value <= 10);		
		echo "</tr></table>";
		 ?>

				 <?php 
				echo "<table border=0>";
				$value=2;
				do {
				echo "<tr><td> ";
				echo $value++;
				echo "</td></tr>";
					# code...
				} while ($value <= 10);		
				echo "</table>";
				 ?>
</body>
</html>
