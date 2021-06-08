<?php 
// using this can find string possition 
$aman = "This is a aman preet singh" ;// inside this string 
$findcontentword ="preet";			// find word 

$position = strpos($aman, $findcontentword);

//$position = strpos($findcontentword);
echo "value is =".$position .PHP_EOL;

	echo true . PHP_EOL;
    echo false . PHP_EOL;
    echo true . PHP_EOL;
    if(strpos($aman, $findcontentword)==true){
    	echo "Not empty your string is = $findcontentword";

    }else {echo "string empty";}
    echo "\n";
    echo strtoupper($aman);

 ?>