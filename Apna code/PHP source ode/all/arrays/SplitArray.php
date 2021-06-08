<?php 	
  $student="John,kon,Mon,Son,Ton";
  // syntext should be same as =>",",
  // string to array 
  $studentarr=explode(",", $student);
  print_r($studentarr).PHP_EOL;
// array to string 
$studentlist=implode(",", $studentarr);
echo $studentlist.PHP_EOL;
//limitor 
  $studentarr=explode(",", $student,3);
  print_r($studentarr).PHP_EOL;
 ?>