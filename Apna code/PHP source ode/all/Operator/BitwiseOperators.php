<!DOCTYPE html>
<html>
<head>
	<title>bit wise operator </title>
</head>
<body>
<h3>Learn to use Bitwise Operators</h3>
<?php 
   /*
     * & - AND
     * | - 
     * ^ - XOR
     * ~ - NOT - Works on one operator like ++ and -- - Unary Operator
     *
     */

    //How Bits work
    // 0 - bits - 0000
    // 1 - bits - 0001
    // 2 - bits - 0010
    // 3 - bits - 0011
    // 4 - bits - 0100
    // 5 - bits - 0101

    // 1 - 1 = 1
    // 0 - 0 = 0
    // 0 - 1 = 0
    // 1 - 0 = 0
   $fisr =1;  //0101
   $secon=5;  //0001
   echo $fisr & $secon . PHP_EOL ."<br>";

echo "<br>  OR <br>";
   $fisrt =0;  //0101
   $second=1;  //0010
   $third=5;
   echo $fisrt | $second . PHP_EOL ."<br>";//0 - 1 = 1
   echo "<br> XOR <br>";
    echo $fisrt ^ $second . PHP_EOL ."<br>";//0 - 1 = 1 and 1 - 1 = 0
    echo "<br> NOT <br>";
     echo~ $fisrt . PHP_EOL ."<br>";//Invert the bits if 0 then 1 or 1 then 0.
 	echo~ $second . PHP_EOL ."<br>";//Invert the bits if 0 then 1 or 1 then 0.
 	echo ~$third;
 ?>
</body>
</html>