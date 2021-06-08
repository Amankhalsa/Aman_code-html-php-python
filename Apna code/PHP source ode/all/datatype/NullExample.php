<?php 
  /*
     * NULL is case insensitive. null / NULL are same
     * null is used to initialize a variable with empty value.
     * unset() and is_null() methods
     * Most common use case is to check if the variable has a value or empty
     */

echo "Understand how to define and work with Null.\n<br>";


$name= null;
echo "Value is :".$name;

echo "<br> <br>";
$name1="0";
echo (!is_null($name1))? " Has value" :" Empty ";
echo "<br>without unset  <br>";

$val=1;
echo $val? "has value ":" Not has value ";
echo "<br>when use unset <br>";
unset($val);
echo $val? "has value ":" Not has value ";
echo "<br> <br>";
$fname= "aman";
echo $fname? "name is here ":"name is not here ";
echo "<br> <br>";
unset($fname);
echo $fname? "name is here ":"name is not here ";


 ?>