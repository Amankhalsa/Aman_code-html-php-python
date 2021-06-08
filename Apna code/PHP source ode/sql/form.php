<!DOCTYPE html>
<html>
<head>
	<title>
		user form
	</title>
		<meta charset="utf-8" content="" >
		<style type="text/css">
			table{
				background-color: wheat;
				color:black;
				font-weight: bolder;
				border-radius: 10px;
			}
		</style>
</head>
<body>
<table border="0" cellpadding="10" cellspacing="10" bgcolor="wheat" align="center">
	<form method="post" action="user_detail.php" required > 
	<tr><td>User name:</td> 
		<td> <input type="text" name="username" placeholder="Enter name" required></td></tr>
	<tr><td>Gender  </td> 
		<td>Male<input type="radio" name="Gender" value="male" checked >
			Female<input type="radio" name="Gender" value="female"> </td></tr>
	<tr><td>D.O.B.:  </td>
		 <td><input type="date" name="bday"  required></td></tr>
	<tr><td>Email:  </td>
		 <td><input type="Email" name="Email" placeholder="test@example.com" required></td></tr>
	<tr><td>Password:  </td> 
		<td><input type="Password" name="password" placeholder="Password" required></td></tr>
	<tr><td>Hobby:  </td>
		 <td>Read<input type="checkbox" name="read" value="Read" > 
			Play<input type="checkbox" name="play"  value="Play" > </td> </tr>
	<tr><td>City :</td> 
		<td> <select name="city"><option>	select</option><option>	Gurugram</option>	</select>
				</td>
					 </tr>
		<tr><td>Address </td> 
		<td> <textarea name="addr" cols="20" rows="5"></textarea></td></tr>

	<tr><td>Submit: </td> 
		<td align="left"> <input type="Submit" name="Submit" ></td></tr>
	</form>
</table>
</body>
</html>