<!DOCTYPE html>
<html>
<head>
	<title>Time</title>
</head>
<body>
	<h2>
<?php 


 date_default_timezone_get().PHP_EOL;
echo "Current time zone".date("Y-M-d h:i:s A").PHP_EOL;

 ?></h2><br>
 <select>

 	<option value="aman">
 <?=  date_default_timezone_get()." Current :" .date("Y-M-d h:i:s A").PHP_EOL;?> </option>
<option> <?=date_default_timezone_set("Australia/Melbourne").date_default_timezone_get() .date("Y-M-d h:i:s A").PHP_EOL;
 ?></option>
 	<option value="aman">
 <?=  date_default_timezone_get()." Current :" .date("Y-M-d h:i:s A").PHP_EOL;?> </option>
<option> <?=date_default_timezone_set("Australia/Melbourne").date_default_timezone_get() .date("Y-M-d h:i:s A").PHP_EOL;
 ?></option>

 </select> 


</body>
</html>