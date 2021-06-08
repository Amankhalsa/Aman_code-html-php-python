<?php
if (isset($_REQUEST['submit'])) {
	$t=$_REQUEST['to'];
	$s=$_REQUEST['sub'];
	$m=$_REQUEST['msg'];
	$a=$_REQUEST['attach'];
if (mail($t,$s,$m,$a)) {

echo "Mail send Successfull";

	# code...
}else{
echo "Mail send  not Successfull";

}
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Email form </title>
 </head>
 <body>
 
 <form method="post" enctype="multipart/form-data">
	<table border="1">
<tr><td>To:</td><td><input type="email" name="to"></td></tr>
<tr><td>Subject:</td><td><input type="text" name="sub"></td></tr>
<tr><td>Message:</td><td><textarea type="text" name="msg" cols="20" rows="5"></textarea></td></tr>
<tr><td>Attachment:</td><td><input type="text" name="attach"></td></tr>

<tr><td align="center" colspan="2"><input type="submit" name="submit" value="send"></td>
		</tr>

	</table>
</form>


 </body>
 </html>