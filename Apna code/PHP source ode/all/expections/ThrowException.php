<?php 
/*
function custom_exception($exc){
		echo "caught error:".$exc->getMessage();






}
	set_exception_handler('custom_exception');
	throw new Exception("Exception is raised!");
	
*/
function custom_exception($exc){
		echo "caught error:".$exc->getMessage();

}
function divide($a,$b){

	if ($b<=0) {
throw new Exception(" Number should be greater then 0 ");
		# code...
	}
	$result =$a/$b;
	return $result;
}
 
	set_exception_handler('custom_exception');
	//throw new Exception("Exception is raised!");
	divide(4,0);

;?>