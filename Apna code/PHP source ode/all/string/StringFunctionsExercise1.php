<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 1: String Functions</h1>

<h2>Find the Given Word in the String (Case Insensitive)</h2>
	<?php 

		$content = "This is a string using case Insensitive we will find given word";
		$wordfind="CASE1"; 
		$result=false;

		$result =stripos($content, $wordfind);

		if($result!==false)
		{
			echo "String has been founded \n".PHP_EOL;
		}else {echo "String has Not fount \n".PHP_EOL;}

		//echo "your Word is =". $result .PHP_EOL;
	 ?>

<h2>Calculate the Length of the String</h2>
	<?php 

					$count="Full forms 
					Html =hypertext markup language 
					<p>= paragraph tag
					<b>=bold tag Css= cascading style sheet 
					DHCP - dynamic host configuration protocol";
					echo "\nLength is = ".strlen($count).PHP_EOL;
	 ?>
<h2>Remove White Spaces from left in the String</h2>
<?php 

					$count="
					<pre>Full forms 
					\"Html =\"hypertext markup language 
					\"<p>=\" paragraph tag
					\"<b>\"=bold tag 
					Css= cascading style sheet 
					DHCP - dynamic host configuration protocol </pre>";
				
					echo "\nremoved white space =".ltrim($count).PHP_EOL;


 ?>
<h2>Reverse the String</h2>
	<?php 


					$count="Full forms:Html =hypertext markup language ";
					echo "Reverseed :". strrev($count).PHP_EOL;
	 ?>

</body>
</html>

