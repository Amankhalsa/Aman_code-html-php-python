<h2>Raise an Error and Suppress it</h2>
<?php 
			//echo " Before ". $php_erroemsg ."\n";
				echo " Before :". $php_errormsg .PHP_EOL ."\n\n <br>";
				
				@$value = 1/0;
				
				echo " After :". $php_errormsg ."\n\n <br>";
			//echo "\n After  ". $php_erroemsg ."\n";

				

 ?>