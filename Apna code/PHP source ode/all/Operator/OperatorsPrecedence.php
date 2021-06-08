<h3>1) Understand How Operator Precedence Works </h3>
<?php 
		
	  /*
     * Unary - !, ++, --
     * Multiplication - * / %
     * Add/Subtract - +, -
     * Relational - <, >, <=, >=
     * Equality - ==, !=
     * Logical AND - &&
     * Logical OR - ||
     * Conditional - ?:
     * Assignment - =, +=, -=, *=, /=, %=.
     *
     */	

$val =10;
echo $val++;
echo PHP_EOL ."<br>\n";
$counter= $val++;
echo $counter;
echo PHP_EOL ."<br>\n";
echo  $val++;
echo PHP_EOL ."<br>\n ";
//Guess the output
$value= 5 * 2 + 5;
echo $value;
 //Classic - Assignment has higher precedence over and
$result1= true && false;
$result2= false && true;
$result3= false and true;
$result4= true and false;
echo PHP_EOL ."<br>\n && operator  higher precedence<br>\n";

echo ($result1)?"true":"false";
echo PHP_EOL ."<br>\n ";

echo ($result2)?"true":"false";

echo PHP_EOL ."<br>\n  and operator <br>\n";

echo ($result3)?"true":"false";

echo PHP_EOL ."<br>\n ";
echo ($result4)?"true":"false";
 ?>