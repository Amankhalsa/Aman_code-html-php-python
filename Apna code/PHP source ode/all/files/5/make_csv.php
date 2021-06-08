<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php



function creater(){

STATIC $user_count=1;
	$file_new="New_file.txt";
	
	//file_put_contents($file_new, "\nhello this is a new file ");
	//$conte=file_get_contents($file_new);
	//echo $conte;
	

	$file_new="New_file.txt";
	$filehandel=fopen($file_new, "a");
	fwrite($filehandel, "\n<br>this is new text line no $user_count");
	fclose($filehandel);

	$conte=file_get_contents($file_new);
	echo $conte;

	$user_count++;

	 } 
	 creater();
	 	 creater();
	 	 	 creater();
	 	 	 	 creater();
	 	 	 	 	 creater();

	 ?>  



</body>
</html>
