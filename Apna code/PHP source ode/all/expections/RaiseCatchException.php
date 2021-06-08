<?php 
//exception when when erroe occure 



function divide($a,$b){


	if ($b<=0) {
throw new Exception(" Number should be greater then 0 ");

		# code...
	}
	$result =$a/$b;
	return $result;
}
try {

	//erroe block 
	divide(4,0);
} catch (Exception $e) {
// code will jump if error occure 
		echo "caught error:".$e->getMessage();
}


 ;?>