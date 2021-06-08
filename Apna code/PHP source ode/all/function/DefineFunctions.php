
<!DOCTYPE html>

<html>

<head>

	<title>Function </title>

	<style type="text/css">

		table{background: wheat ;

			border: 5px solid red ;}

			th{background: yellow;}

			td{

				font-variant-caps:titling-case;

			}

	</style>

</head>

<body>

	<h1>Even and Odd number Printing uning PHP function:</h1>

<table border="2" cellpadding="5">

	<tr><th>Even </th><th>Odd</th></tr>

<?php 


//1) Define and Call a Function

function Print_result($limit){

	for($i=0; $i<=$limit; $i++){


		if ($i%2==0) {

				echo "<tr>";

				echo "<td>Even number is : $i </td>".PHP_EOL;

					

			# code...

		}

		else {

				

				echo "<td>Odd number is : $i </td>".PHP_EOL;

				echo "</tr>";

						# code...

		}

	}

	echo "</tr>";

}

    //Call the Function

Print_result(20);



 ;?>

 </table>

 <?php function add($a,$b){

	return $a + $b;
}
echo "<br>Addition  is ". add(10, 20).PHP_EOL;
 ?>
</body>

</html>

