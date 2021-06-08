<?php 
function custom_multiple($excep){
	echo "cought error :".$excep->getMessage();
}
function divs($a,$b){
	try {

	if ($b<=0) {


		throw new Exception("\nError Processing Request");
		
		# code...
	}

		$result=$a/$b;

	} catch (Exception $e) {
		throw new Exception("Number should be grater then 0 ".$e->getMessage());
		
		
	}
	return $result;
}
set_exception_handler('custom_multiple');
divs(1,0);

 ?>