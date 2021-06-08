<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
 <form method="post"> 

 <input type="submit" name="myclick1" class="myclick1" value="myclick1" onclick="<?php myclick1(); ?>" />  

        <input type="submit" name="myclick2"class="myclick2" value="myclick2" /> 

    </form> <br>

<?php 


function myclick1(){
	echo "hello world";
}
myclick1();
 
 ?>
</body>
</html>
