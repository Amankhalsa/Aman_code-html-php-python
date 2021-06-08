<h1>Good Practise for Constants</h1>
<center>
<?php 
 // CONSTANT NAME SHOULD BE UPPER CASE 
define (LNAGUAGE, "PHP");
define (VERSON, 7.3);
//sample 2
echo LNAGUAGE." " .VERSON."\n" ;
echo "<hr>";  
$name = " preet ";
define (NAME, "john, smith");
echo NAME .$name;
echo "<hr>";  

// sample 3
define(_1Hello,  " java");
echo _1Hello;
echo "<hr>";  
// sample 4
$_1Hello = " Programing";
echo $_1Hello ._1Hello;
 ?>