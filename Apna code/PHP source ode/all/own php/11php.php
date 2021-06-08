<!DOCTYPE html>
<html>
<head>
	<title>
		For Loop in PHP Projects 
	</title>
	<style type="text/css">
		select{
			width: 120px;
			height: 50PX;
			margin-left:400PX;
			border: 3px solid;
			box-shadow: 5px 5px 5px gray;

		}
		option{
			height: 50px;
			width: 100px;
	
		}
	</style>
</head>
<body>
<h1><mark>For Loop in PHP Projects:</mark></h1>
 <select>
 <?php 
			for($i=2020; $i>=1900; $i--) { 
				?>
 	<option value="aman"><?php    echo $i  ?></option>
<?php } ?>


 </select> 

</body>
</html>