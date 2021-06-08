<!DOCTYPE html>
<html>
<head>
	<title>Comparison operators</title>
	<style type="text/css">
		h2{color:blue;}

	</style>
</head>
<body>
<?php 
/*
 * EQUAL TO = ==
 * DATA TYPE AND VALUE IDENTICAL = ===
 * NOT EQUAL TO = != / <> /  !==
 * GREATER THAN = >
 * LESS THAN = <
 * GREATER THAN OR EQUAL TO = >=
 * LESS THAN OR EQUAL TO = <=
 *
 */
// using ternory operator 
// for condition checking 
//==================================================================example 1===================================================
print "<h2>1) Use EQUAL TO (==) operator to check PHP version</h2> \n \t\t\t";
$php_version=7.3;
$php_system_ver= PHP_MAJOR_VERSION . ".".PHP_MINOR_VERSION;

print ($php_version==$php_system_ver)?" \n Matched":" \n Not matched"; 
// if not matched example is here 
$php_version=7.1;
$php_system_ver= PHP_MAJOR_VERSION . ".".PHP_MINOR_VERSION;

print ($php_version==$php_system_ver)?"\n Matched":"\n Not matched"; 

//==================================================================example 2===================================================
echo "\n\n<h2>2) DATA TYPE and VALUE IDENTICAL ( -=== )</h2>\n\t\t";
 $name1="10";
 $name2=10;
 $name3="10";
 echo PHP_EOL;

echo ($name1===$name2)?" Name matched " :" Name not Matched ";
echo "\n<br>";
// if use equal operator 
echo ($name1==$name2)?" Name matched " :" Name not Matched ";
echo "\n<br>";

echo ($name1==$name3)?" Name matched " :" Name not Matched ";
echo "\n\n<br>";

//==================================================================example 3===================================================
echo "<h2>3) Find Oranges using !=, <> and !==</h2>";
echo "\n\t";
   
$fruits="orange";
$fruit1= "apple";
$fruit2="orange";

// 1st not equal operator 
echo ($fruits!=$fruit1)?"Its not orange":"Its orange";
echo "\n\t<br>";

// 2nd not equal operator 
echo ($fruits<>$fruit2)?"Its not orange":"Its orange";
echo "\n\t<br>";

//3rd not equal operator
 echo ($fruits!==$fruit1)?"Its not orange":"Its orange";

echo "\n\n<br>";
// ===============================================example 4 using function ====================================================
echo "<h2>4) Find the senior citizen whose age greater than 60 using greater operator.</h2>";

echo "\n\n";
@define(Name1, "Ram milan");

@define(Name2, "Prabhjot");

@define(Name3, "Hardeep");

echo "<hr>";
function print_age_fun(){

$agelimit=60;
$age1=40;
$age2=60;
$age3=65;

echo ($age1>=$agelimit)? Name1." is senior citigen ": Name1." is not senior citigen";
echo "<br>\n\n";

echo ($age2>=$agelimit)? Name2." is senior citigen ": Name2." is not senior citigen";
echo "<br>\n\n";

echo ($age3>=$agelimit)? Name3." is senior citigen ": Name3." is not senior citigen";
echo "<br>\n\n";


}
print_age_fun();

// ===============================================example 5 using function ====================================================
echo "<h2>5) Find the Kids who can eat free pizza</h2>";

@define (Name4, "Mogli and  shogli ");
@define(Name5," Deman and Preet");
@define(Name6, "herry and Garry");
echo "<hr>";
function pizza_fun(){

	$pizza_age_limit=10;
	$child1=9;
	$child2=14;
	$child3=6;
echo ($child1<=$pizza_age_limit)?Name4. " you are elligible for free pizza ": "Sorry,".Name4. " You are nor elligible for free pizza ";

echo "<br>\n\n";
echo ($child2<=$pizza_age_limit)?Name5. " you are elligible for free pizza ": "Sorry,".Name5. " You are nor elligible for free pizza ";
echo "<br>\n\n";
echo ($child3<=$pizza_age_limit)?Name6. " you are elligible for free pizza ": "Sorry,".Name6. " You are nor elligible for free pizza ";
echo "<br>\n\n";

}

pizza_fun();
echo "<br>\n\n";

?>
</body>
</html>
