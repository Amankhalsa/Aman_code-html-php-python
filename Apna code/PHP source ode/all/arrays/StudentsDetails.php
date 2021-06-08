
<!DOCTYPE html>
<html>
<head>	
	<title> Student Detail </title>
</head>
<body>
<p>
	<table border="1" cellpadding="15"  align="left" cellspacing="4" >
	<h1>Student detail:</h1>		
	<tr><th>ID </th><th>Name </th><th>Class </th><th>Age </th></tr>
<?php 
		/*
		1) Create a Students Array with 3 students
		2) Provide the details: ID, Name, Age and Class
		3) Fill up the Array and Display in HTML Page
		4) Use Table to display the Students details.
		*/
		include "student.php"; 		
	foreach ($student_detail as $key => $value) 
					{
					echo "<tr>";

		foreach ($value as $key2 =>  $value2) 

					{
						//echo "<th> $key2 </th> ";

						echo "<td> $value2 </td>";
					}
						echo 	"</tr>";

					}

					;?>
</p>
</table>

</body>
</html>
