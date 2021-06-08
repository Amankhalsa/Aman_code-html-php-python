<?php 

//this is a clean exit from your code 
try {
	throw new Exception("<h3>from try block :\"Exception Raiased\" \n</h3>");
	
} catch (Exception $e) {
				echo $e->getMessage();
}finally{
	echo "<h4>from final block</h4> ";
}

 ?>