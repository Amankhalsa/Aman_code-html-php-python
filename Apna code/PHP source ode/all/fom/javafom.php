<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	</head>

<body>

<?= "<h1>This button will print your name :</h1>"; ?>
<p id="demo"> </p>
Click here :
<input type="button" name="button" value="Name print" onclick="print_name(); ">
<script>
		function print_name(){
	
	var a=prompt("enter  first name");
	var b=prompt("enter  last name");
	var c=a+b;
	document.getElementById('demo').innerHTML= " Your name is : " +c;
}

				
	</script>
</body>
</html>
