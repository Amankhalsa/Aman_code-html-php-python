<PRE>
<?php 

echo date_default_timezone_get().PHP_EOL;
echo date("Y-M-d h:i:s A").PHP_EOL;
echo date_default_timezone_set("Australia/Melbourne").PHP_EOL;
echo date("Y-M-d h:i:s A").PHP_EOL;
echo date_default_timezone_get();

 ?>
 </PRE>