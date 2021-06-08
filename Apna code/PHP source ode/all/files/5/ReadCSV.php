<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		td{ color:green;
			font-size: 1.3em;
			word-spacing: 10px;
	
		}
	</style>
</head>
<body>
<table border=1 cellpadding=10 cellspacing=05>

<blockquote>
<pre>
<?php 

$csv_file_data="marks.csv";
$get_csv=file_get_contents($csv_file_data);

print_r($get_csv);

$new_csv=file($csv_file_data);
print_r($new_csv);
var_dump($new_csv);
foreach ($new_csv as  $value) {

	echo $value;
}
// last example 
foreach ($new_csv as  $line) {
	$data[]=str_getcsv($line);
	//$data2[]=$line;

}
echo "<span style=color:red;font-size:1.3em;>";
print_r($data);

echo "</span>";

$file_data="marks2.csv";

$new_data=file($file_data);

foreach ($new_data as $KEYS =>$val) 	
{


//$data2[ ]= $val;
	
	echo "<tr>";
//	echo "<td>";	
	ECHO " <td>($KEYS)</td> <td> $val </td>";
	
	echo "</tr>";

	
}



 ?>
 </pre>
 </blockquote>
	
</table>
</body>


</html>