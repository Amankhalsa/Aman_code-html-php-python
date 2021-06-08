<?php 

function multiple($exp){
	echo "caught error:".$exp->getMessage();
}


function divide($a,$b){

if($a<=0 || $b<=0 || $a==$b){

	throw new Exception("Error Processing Request");
	
}
else {
	echo "<h1> Even Number printing :</h1>";
for(;$a<=$b;$a++){

	if($a%2==0){

		echo "<pre> Even Number : $a</pre>".PHP_EOL;
			}
		}
		echo "<h2>if you change Divide method value error will raised</h2>";	

	}

}
 set_exception_handler('multiple');
	//throw new Exception("Exception is raised!");
	$result=divide(2,20);
	echo $result;?>