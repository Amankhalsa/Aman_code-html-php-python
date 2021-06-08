<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="aman.css">
	<title>process php</title>
</head>
<body>

	<h1>wellcome to you in this page </h1>
<?php 
		

			$username =$_POST['username'];
			$male =$_POST['Gender'];
			$female=$_POST['Gender'];
			$bdy=$_POST['bday'];
			$email=$_POST['Email'];
			$passwod=$_POST['password'];
			$read=$_POST['read'];
			$play=$_POST['play'];
			$city=$_POST['city'];
			$addr=$_POST['addr'];	
			


$file_new="New_file.csv";


file_put_contents($file_new, "$username  \t$male \t$bdy \t$email \t$read $play \t$passwod \t$city \t$addr\n",FILE_APPEND);

/*	

$filehanfle=fopen("filename.csv", "a");
fwrite($filehanfle, "$username \n");
fclose($filehanfle);
*/




			?>
<?php  

if (isset($_REQUEST['submit']))




 		
 


	?> 

<?php	{?>  
<pre>
<TABLE border="0" cellpadding=10  cellspacing=1 >
<TR><td class="hello">User name</td><td  class="aman"> <?php echo $username;  ?> </td></TR>
<tr><td class="hello">Gender </td>  <td class="aman"><?php echo $male;  ?> </td></tr>
<tr><td class="hello">DOB 	</td>   <td class="psd"><?php  date("d-m-y"); echo $bdy;    ?></td></tr>
<tr><td class="hello">Email </td>   <td  class="aman"><?php echo $email;  ?> </td></TR>
<tr><td class="hello">password</td> <td  class="aman"><?php echo $passwod ?"$passwod":"blank";  ?> </td></TR>
<tr><td class="hello">Hobby</td>
<td  class="aman"><?php  
if ($read  && $play==true) {echo "$read & $play";
}else{
	echo "$read"; echo "$play";}
 ;?> 
</td></TR>
<TR><td class="hello">City :</td><td class="aman"> <?php echo $city?"$city":"Null";  ?> </td></TR>

<TR><td class="hello">Address :</td><td  class="aman"> <?php echo $addr;  


?> </td></TR>



</TABLE>

<?php  } ?>

</body>
</html>