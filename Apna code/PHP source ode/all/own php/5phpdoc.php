<html>
<head>
	<title>
	My Constant </title>
	<style type="text/css">
	h1{
			color: blue;

			background-image: linear-gradient(green,yellow);
		
			width:400px;
		}
		h2{
			background-image: linear-gradient(red,yellow);
			width:400px;
		
		}
	</style>
</head>
<body>
<h1> Contant variable connected to data base 
</h1>	
<?php
echo '<h2>hello aman contant will  here</h2>'; 
	define("HOSTNAME","localhost");
	define("USERNAME","root");
	define("PASSWORD", "");
	define("DBNAME", "learnphp");
		$checkcon = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME) or die('cant be connected to data base ');
if($checkcon){
	echo "ou are connected to database";
}
define("HOSTNAME","www.amansin.com");
?>
</body>
</html>