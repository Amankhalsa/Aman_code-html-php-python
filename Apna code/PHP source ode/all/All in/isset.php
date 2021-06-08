
</style>
<center>

	<?php 


Echo "<h1 style='color:Navy;font-variant: small-caps;'>how to use of isset method in php</h1>";
// define empty varibale 
$name ;
echo $name;
// how to define  isset() method:
echo "<h2 style=color:red;>Output is :$name ";
// 2nd exmaple 
echo isset($name) ?" > variable is set" :" > varibale is not set";
echo "<hr>"; 
// define varibale value now 
 $name ="Aman and preet singh ";
// define isset  if varibale is  set 
 echo "Output is :$name ";
 echo isset($name) ?" > variable is set" :" > varibale is not set";

// another new  example   when  set example 
 echo "<hr>"; 
echo "fist name:" .$firstname ="AMAN";
echo "<br>fist name:".$secname=$firstname ;
echo isset($secname) ?" variable is set " :" varibale is not set ";
echo "<hr>"; 

// net new example variable of variable  when  not set exampe  
echo "<b>fist name: ". $first;
$sec="if in have value";
echo "<br><b>Second  name:".$sec=$first;

echo isset($sec) ?" variable is set " :" varibale is not set ";


echo " <br/>Thanks for this by <br> </h2>".$GLOBALS['name'] ;