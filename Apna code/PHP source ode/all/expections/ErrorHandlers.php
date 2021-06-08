<?php function custom_error($error_mo, $error_string){
		echo $error_string;


}

	set_error_handler('custom_error');

echo (5/0);
	 ?>