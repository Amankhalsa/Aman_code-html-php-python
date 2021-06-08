<!DOCTYPE html>
<html>
<head>
	<title>PHP fom</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table >
		<td colspan=""></td>
	</table>
<table border=1 cellpadding=10 cellspacing=05 width="40%">



<?php 



if (isset($_REQUEST["submit"])) {

$name=$_POST["text"];

$age=$_POST["age"];

$emai_id=$_POST["email"];

$U_pass=$_POST["Password"];
$filehanfle=fopen("filename.csv", "a");

fwrite($filehanfle,"
	<tr><td class='head'>Name is :</td> <td> " .$name."</td></tr>
		  <tr><td class='head'>Age is :    </td> 	<td>".$age."</td></tr>
		  <tr><td class='head'>  Email id : </td> 	<td>".$emai_id."</td></tr>
		  <tr><td class='head'>Password :  </td>	<td> ".$U_pass."</td></tr>
		  <tr><th class='empty' colspan=2> === empty === </th></tr>");

fclose($filehanfle);
$filehanfle="filename.csv";
$get_content=file_get_contents($filehanfle);

echo $get_content;

}




 ?>

</table>
</body>
</html>