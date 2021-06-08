<?php 

if (isset($_REQUEST['submit'])) {
	move_uploaded_file($_FILES['img']['tmp_name'], 'upload/'.$_FILES['img']['name']);
	# code...
		echo "uploaded ";
		# code...
	}
else {echo "not uploaded ";}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Upload function 
 	</title>
 </head>
 <body>
 <form method="post" enctype="multipart/form-data">
	<table>
	<tr><td>Select file :</td><td><input type="file" name="img"></td></tr>
			<tr>
<td align="center" colspan="2"><input type="submit" name="submit" value="Upload"></td>
		</tr>

	</table>
</form>
 </body>
 </html>