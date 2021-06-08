<?php 

session_start();
//session create 
$_SESSION['FIRST_NAME']="amansin.blogspot.com";
//$_SESSION['FIRST_NAME']=$_GET['name'];

echo $_SESSION['FIRST_NAME'];

 ?>