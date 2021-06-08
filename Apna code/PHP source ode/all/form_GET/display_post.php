<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
<H1>POST METHOD</H1>
<?php 

echo "hello !<BR>";


$name=$_POST['input_text'];
$email=$_POST['input_email'];

echo "Name : $name and Email : $email";

 ?><br>
 <a href="student.html">back to home</a>
</body>
</html>
