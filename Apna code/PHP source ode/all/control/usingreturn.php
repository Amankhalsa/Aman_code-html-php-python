<!DOCTYPE html>
<html>
<head>
	<title>Return </title>
</head>
<body>
	<CENTER>
<?php 
function checkUserRole($userRole){

if (empty($userRole)){
	echo " User roll cannot be empty \n<br>";
	
	# code...
}

		switch ($userRole) {
		case "Admin":
				echo "hello Admin! \n<br>"; 
				break;
		case 'Editor':
				echo "hello Editor! \n<br>";
				break;
		default:		
			break;
	}
	
}
checkUserRole('Admin');
checkUserRole('');
checkUserRole('Editor');
 ?>
 <table border="1" width="30%">
<tr><th><?= "Table head ";?> </th></tr>
 <tr><td><?= checkUserRole('Admin');?></td></tr>
 <tr><td><?= checkUserRole('Editor');?></td>

 </tr></table>
</CENTER>
</body>
</html>
