
<?php
function divide($a, $b):int{
	if($b<=0){
		throw new Exception(" Error Processing Request ");	
			}
		$result=$a/$b;
		return $result;

}
try {
	echo $result=divide(8,0);
		} catch (Exception $e) {
	echo 'caugh Exception :'.$e->getMessage().PHP_EOL;

	}
 ?>