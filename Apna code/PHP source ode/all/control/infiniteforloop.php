<?php 

echo "<h1>1) Write Infinite loop with for loop and print even and odd numbers till 20 numbers.</h1>";
echo "<table border='1' cellpadding='5' >
<tr>
<td> Number </td>
<td> Even  </td>
<td> Odd </td>
</tr>
";

for ($i=1; true; $i++) { 
	ECHO "<tr>";
	echo "<td>$i</td>";
	$j=$i%2;

	if ($j>0) {
		echo " <td>No   </td>";
		echo " <td>Yes   </td>";
	
	}else{echo " <td>Yes   </td>";
		echo " <td>No  </td>"; }

				if ($i==20){
					break;
				}

				echo "</tr>";
}

echo "</table>";
 ?>