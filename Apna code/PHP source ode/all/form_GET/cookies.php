<!DOCTYPE html>
<html>
<head>
	<title>
		cookie
	</title>
</head>

<body>
<h1>Cookies</h1>

<?php 

		$cookie_name="User";
		$cookies_value="Amansin.weebly.com";
		setcookie($cookie_name, $cookies_value,time() +(8),"/");
		if (!isset($_COOKIE[$cookie_name])) {
			echo "welcome '".$cookies_value."'. Nice to meet you ";
			# code...
		}else {
			echo "Hey, '".$cookies_value."' You are back <br>";
			echo "value is :".$_COOKIE[$cookie_name];
		}


 ?>


</body>
</html>