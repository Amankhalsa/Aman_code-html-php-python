<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="aman.css">
	<title>process php</title>
</head>
<body>
	<h1>wellcome to you in this page </h1>
	<h1>Thanks  for submit....  Your posted  data is here  </h1>
<?php 
			$firstname =$_REQUEST['firstname'];
			$lastname =$_REQUEST['lastname'];
			$username=$_REQUEST['username'];
			$password=$_REQUEST['password'];
if(isset($firstname)){?>  
<pre>
<TABLE >
<TR><td class="hello">First name = </td><td  class="aman"> <?php echo $firstname;  ?> </td></TR>
<tr><td class="hello">Last name  = </td><td class="aman"><?php echo $lastname;  ?> </td></tr>
<tr><td class="hello">User name  = </td><td class="psd"><?php echo $username;  ?> </td></tr>
<tr><td class="hello">Password   = </td><td  class="aman"><?php echo $password;  ?> </td></TR>
</TABLE>
</pre>
<?php }?>
</body>
</html>