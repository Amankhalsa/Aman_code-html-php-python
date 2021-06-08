<!DOCTYPE html>
<html>
<head>
	<title>Assignment </title>
<style type="text/css">
	th,td{
		padding: 10px;
	}
	h2	{
		color: BLUE;
	}
</style>
</head>
<body>
<blockquote>
<h2>1) Print the Employee Details</h2>
<?php 
		$Employee_name= "Jatinder singh";
		$Employee_address="India";
		$Employee_emailid="Abc@example.com";
		$Employee_age=35;
		$Employee_married=false;
		$last_sallary=14500;
		$working_hours=8;
		 	?>
		 	<table border="1">
		 		<tr>
		 			<th>Employee Name </th>
		 			<th>Employee Address</th>
		 			<th>Employee Email-id</th>
		 			<th>Employee Age</th>
		 		</tr>
		 			<tr>
		 				<td><?=$Employee_name;?></td>
		 				<td><?=$Employee_address ;?></td>
		 				<td><?=$Employee_emailid;?></td>
		 				<td><?=$Employee_age;?></td>
		 			</tr>
		 	</table>
<h2>2) Working Hours</h2>
working Hours = 
<?php  
	echo $working_hours." Hours";

			?>
<h2>3) Employee Email ID and Address</h2>

<p>Employee Email ID: <?= $Employee_emailid ;?></p> 
<p>Address :<?php  echo $Employee_address;?></p>

<h2>4) Check if Employer is Married or not</h2>
Married or not= 
<?php  
		echo ($Employee_married)?" Married ":"unmarried";
			?>
<h2>5) Print the Employer Last Salary Drawn using Doubles</h2>
Last sallary is =
<?= 
$last_sallary;
			?>
</blockquote>
</body>
</html>