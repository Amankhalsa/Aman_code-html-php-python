<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		td{ color:green;font-size: 1.3em;word-spacing: 10px;}
	</style>
</head>
<body>
<table border=1 cellpadding=10 cellspacing=05>
<blockquote>
<pre>
<?php 

for ($i=0; $i <=6; $i++) { 
	//	echo "<tr>";	
	echo "<td style=color:red;font-size:1.3em;> | Row $i | </td>";
}
 ?>
<?php
  $Next_csv="marks3.csv";
  if (file_exists("marks3.csv")) {
  	echo "file exists";
  	$contain_next=file($Next_csv);
  	
  }else {	echo "<h2>Refresh page</h2>";}
echo "<tr>
<td span style=color:blue;font-size:1.3em;>Class</td>
<td span style=color:blue;font-size:1.3em;>Sec</td>
<td span style=color:blue;font-size:1.3em;>Name  </td>
<td span style=color:blue;font-size:1.3em;>Eng</td>
<td span style=color:blue;font-size:1.3em;>Hin</td>
<td span style=color:blue;font-size:1.3em;>Math</td>
<td span style=color:blue;font-size:1.3em;>Pbi</td>
</tr>";
 @ $counter=0;
 foreach ($contain_next as $key => $value_next)
	 { 
echo "$value_next";	  
$counter++;
   }  
	file_put_contents($Next_csv,"\n<tr>
	<td>LKG</td>
	<td>A</td>
	<td>Name $i</td> 
	<td>77</td>
	<td>27</td>
	<td>37</td>
	<td>34</td>
	</tr>",FILE_APPEND);   
	?>
 </pre>
 </blockquote>
</table>
</body>
</html>