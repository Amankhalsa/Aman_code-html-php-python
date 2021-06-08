<?php

$dbhost = 'localhost:3360';
$dbuser = 'root';
$dbpass = '';
$db     = 'test_db13';


$conn  = mysqli_connect($dbhost,$dbuser,'',$db);

if(! $conn){
  die('Could not connect connect: ') ;
}

echo 'Successfully Connected';


$sql = 'Connected Successfully';
  $retvalue = mysqli_query($sql);

  if(! $retvalue){
    die('Cannot connect to SQL: ');
  }

echo 'DataBase test_db13 has successfully created';

mysqli_close($conn);

 ?>