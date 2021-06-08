<?php 

  /*  
    function custom_exception_handler($exception) {
        echo "Uncaught exception: " , $exception->getMessage(), "\n";

    }

    set_exception_handler('custom_exception_handler');
    throw new Exception("Exception is raised");
    


*/	function custom_expection($expn){
			echo 'caugh Exception :'.$expn->getMessage().PHP_EOL;
										}
	function divide($a, $b):int{
	if($b<=0){
		throw new Exception(" Error Processing Request  ");	
			}			
		$result=$a/$b;
		return   $result;
}
set_exception_handler('custom_expection');
echo divide(4,0);
?>