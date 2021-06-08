<!DOCTYPE html>
<html>
<head>
	<title>csv</title>
</head>
<body>
	<table border=1 cellpadding=5 cellspacing=5 >
		
<pre>

<?php 
	

	$content ="test.csv";

	$get_cont=file_get_contents($content);
	//echo $get_cont;
	echo "<h2>using simple way</h2>";
	print_r($get_cont);


$if_csv_format=file($content);
echo "<h2>using print_r</h2>";
print_r($if_csv_format).PHP_EOL;
echo "<h2>using var dump</h2>";
var_dump($if_csv_format).PHP_EOL;
echo "<h2>using foreach </h2>";
 foreach ($if_csv_format as  $value) {



	
	echo $value;


 }
 echo "<h2>using str_getcsv method </h2>";

foreach ($if_csv_format as  $key => $line) {




	$data[]=str_getcsv($line);


	# code...
}
echo "<span style=color:red;font-size:1.5em;>";

asort($data);
//rsort($data);

 print_r($data);



echo "</span>";


 echo "<h2>using array_map method </h2>";
$new_csv=array_map('str_getcsv', file($content));

echo "<ol><li>";
	print_r($new_csv);
echo "</li></ol>";

 ?>
 </pre>

 </table>
</body>
</html>
