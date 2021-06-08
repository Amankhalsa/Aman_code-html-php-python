<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Use All Data Types</h1>

<h2>Calculate the area using Length and breath using Integer:</h2>
<?php 
 		$Length=450;
 		$width=300;
 		$area=$Length*$width;
 		echo "Area is $area";
 ?>
<h2>Calculate Student Exact Marks Percentage with Double:</h2>
<script type="text/javascript">
	var a=prompt("enter you  name");
document.write( " Student name  :"+a );
</script>
		<?php 
			$totalmarks=450;
			$obtain=320;
			$Percentage=$obtain/$totalmarks*100;
echo "<br>Percentage is $Percentage";
		 ?>
<h2>Check if the user has admin roles:</h2>
				<?php 
					$name="john";
					$roll=true;
					echo ($roll==$name)? " yes you have admin roll ":" you have not admin roll";
				 ?>
<h2>Define and Display a User Name using Strings:</h2>

				<?php 
					$name="Amansingh";
					echo $name;
				 ?>
<h2>Check if the variable is null or not:</h2>
<?php 
		$val2=null;
		echo (!$val2)?" is null ":"not nul";
	 ?>
</body>
</html>

