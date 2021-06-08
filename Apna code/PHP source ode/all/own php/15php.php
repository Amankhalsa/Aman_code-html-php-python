<!DOCTYPE html>
<html>
<head>
	<title>PHP Arrays When we use arrays</title>
</head>
<body>
<h1><mark>PHP Arrays When we use arrays</mark></h1>
<?php 
$aman=["Amanpreet","Singh",28,"TSE","india"];?>
<h3> single php </h3> <?php
 echo $aman[0]; 
 ?>
 <h3> var dump </h3>
<pre>
<?php 
var_dump($aman);
 ?>
<h3> print array </h3>
<?php 
print_r($aman);
 ?>
</pre>

<!-- <?php

foreach ($aman as $preet ) {
	echo $preet."<br>";
	# code...
}

 ?>-->
</body>
</html>