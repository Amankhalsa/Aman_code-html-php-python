<?php 

//multiple exceptions 

function multiple($exp){
	echo "caught error:".$exp->getMessage();
}


function divide($a,$b){

	try{
		if ($b<=0) {
		throw new Exception("\n Error is raised !");
				# code...
		}
		$result =$a/$b;
		

	}catch (Exception $e) {
		// code will jump if error occure 
		throw new Exception( "Number should be greater then 0 ".$e->getMessage() );
		
}
	return $result;

	
}
 set_exception_handler('multiple');
	//throw new Exception("Exception is raised!");
	divide(4,0);



 ?>