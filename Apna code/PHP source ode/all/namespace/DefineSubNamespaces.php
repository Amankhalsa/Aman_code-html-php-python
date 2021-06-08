<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h1{color:blue;
			background:yellow;}
	</style>
</head>
<body>
	<h1>Learn to Define Sub Namespaces</h1>
<?php 


include "sub1.php"; 
include "sub2.php";
echo subnamespace\sub1\Hello();
echo "<hr>";
echo subnamespace\sub2\Helloprint();?>
</body>
</html>
