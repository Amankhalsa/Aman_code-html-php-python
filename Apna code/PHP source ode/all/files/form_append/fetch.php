<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table border=1 cellpadding=10 cellspacing=04>
	<blockquote>

	<pre>
<?php 

$filehanfle="filename.csv";

$get_content=file_get_contents($filehanfle);


echo $get_content;

 ?>

 </pre>
 </blockquote>
 </table>
</body>
</html>
