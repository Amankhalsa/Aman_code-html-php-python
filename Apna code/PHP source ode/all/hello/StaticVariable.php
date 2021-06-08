<center>
<?php

echo "<h1>Define a Static Variable and Print it<h1>\n";
echo "<h2>  not using static keyword </h2>\n";
// sample 1st not use of static 
function cout(){
$count=1;

echo $count . "\n<br>";
$count = $count *1;


}
cout();
cout();
cout();
cout();

echo "<hr>";
echo "<h1>\nusing as a static  variable </h1>\n";
// sample 2 using static keyword in function 
global $count;
//as well as using globals 
static $count =1;
function cout_static(){
 global $count;
echo $count . "\n<br>";
$count = $count *2;

}
echo "\t<h2 style=color:red;>\n";
cout_static();
cout_static();
cout_static();
cout_static();
cout_static();
echo "</h2>";

echo "<hr>";
echo "<h1>when you use globas with  static  variable </h1>\n";
// sample 2 using static keyword in function 
global $count2;
//as well as using globals 
static $count2 =1;
function cout_static2(){
 global $count2;
echo $count2 . "\n<br>";
$count2 = $count2 +1;

}
echo "\t<h2 style=color:red;>\n";
// calling to function 
cout_static2();
cout_static2();
cout_static2();
cout_static2();
cout_static2();
cout_static2();

echo "</h2>";








