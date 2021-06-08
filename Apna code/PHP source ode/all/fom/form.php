<!DOCTYPE html>
<html>
<head>
	<title>My form</title>
<link rel="stylesheet" type="text/css" href="fom.css">
</head>
<body>
<div class="hed"></div>
<h1>Please enter you information </h1>

<form name="regform" action="/fom/18php.php" method="POST">
<fieldset> <legend>Registration form </legend>
	First Name:<br>
	<input type="text" name="firstname" class="jon" placeholder="firstname">  <br><br>
	Last Name:<br>
	<input type="text" name="lastname" class="jon" placeholder="lastname">  <br><br>
	Email-id:<br>
	<input type="text" name="username"class="jon" placeholder="Email-id"><br><br>
	Password:<br>
	<input type="password" name="password" class="jon" placeholder="password"><br><br>
	Submit:<br>
	<input type="submit" name="submit" value="Submit information" class="bt">
	<input type="reset" name="reset" value="clear all" class="bt">

	</fieldset>
</form>

</body>
</html>