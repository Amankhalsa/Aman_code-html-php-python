<?php 


function custom_exception($exc){
		echo "caught error:".$exc->getMessage();


}

	set_exception_handler('custom_exception');
try {
	throw new Exception("\nException is raised!");	
} finally{
	echo "this block wll executed ";
}

 ?>