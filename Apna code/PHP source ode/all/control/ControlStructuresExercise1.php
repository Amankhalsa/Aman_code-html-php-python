<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

<h1>1) Exercise 1: Display Odd and Even Numbers</h1>
<?php 
			
			for ($i=2; $i <=10 ; $i++) {
				$j=$i%2;
			if($j==0){
				
				echo " Even number is =$i <br> <br>";
			} 
			
			else {
			echo '<hr>';
				echo " Odd  number is =$i <br> <br>";
				# code...
			}
			}
 ?>

<h1> Define the MAX_NUMBERS in the namespace file</h1>
<table border="1">
	<tr>
		<th>Number </th>
		<th>Odd number </th>
		<th>Even number </th>
	</tr>
<?php 

		require_once "MyConfigFile.php";

		for ($j=0; $j <=MyConst\MAX_NUMBER ; $j++) { 
			$k=$j%2;
			echo "<tr>";
			echo "<td> $j</td>";
			if ($k==0){
				echo "<td> No </td>";
				echo "<td> Yes</td>";

			}else {
				echo "<td> Yes </td>";
				echo "<td> No </td>";


		}
		echo "</tr>";
		}


 ?>

</table>
</body>
</html>

