<?php 
echo "Learn to combine strings together\n\n";
$firstname="Amanpreet";
$lastname="singh";
$full_name=$firstname ." ".$lastname;
echo $full_name .PHP_EOL;


$marks=34;
if ($marks>=33) {
	
	$passed=true?" Passed ": " Fail " ;
	# code...
}
else{
	$passed=false?" Passed ": " Fail " ;
	}

$result ="Student name $full_name his  Marks ".$marks." he is".$passed;

echo $result .PHP_EOL;

 ?>