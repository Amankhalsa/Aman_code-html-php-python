<!DOCTYPE html>
<html>
<head>
	<title>
		Compare operaotr 
	</title>
	<style type="text/css">
			*{
			max-width: 0 auto;
		}
		h2{
			color:blue;
		}

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
print "<h2>1) Use EQUAL TO (==) operator to check PHP version</h2> \n \t\t\t";
$php_version=7.3;
$php_system_ver= PHP_MAJOR_VERSION . ".".PHP_MINOR_VERSION;

print ($php_version==$php_system_ver)?" \n Matched":" \n Not matched"; 
// if not matched example is here 
$php_version=7.1;
$php_system_ver= PHP_MAJOR_VERSION . ".".PHP_MINOR_VERSION;

print ($php_version==$php_system_ver)?"\n Matched":"\n Not matched"; 

// ecampe 2
echo "\n\n<h2>2) DATA TYPE and VALUE IDENTICAL ( -=== )</h2>\n\t\t";
 $name1="10";
 $name2=10;
 $name3="10";
 echo PHP_EOL;

echo ($name1===$name2)?" Name matched " :" Name not Matched ";
echo "\n";
// if use equal operator 
echo ($name1==$name2)?" Name matched " :" Name not Matched ";
echo "\n";

echo ($name1==$name3)?" Name matched " :" Name not Matched ";
echo "\n\n";

//example 3
echo "<h2>3) Find Oranges using !=, <> and !==</h2>";
echo "\n\t";
   
$fruits="orange";
$fruit1= "apple";
$fruit2="orange";

// 1st not operator 
echo ($fruits!=$fruit1)?"Its not orange":"Its orange";
echo "\n\t";

// 2nd not operator 
echo ($fruits<>$fruit2)?"Its not orange":"Its orange";
echo "\n\t";

//3rd not operator
 echo ($fruits!==$fruit1)?"Its not orange":"Its orange";

echo "\n\n";
//example 4
echo "<h2>4) Find the senior citizen whose age greater than 60 using greater operator.</h2>";
echo "\n\n";
			
			// using constant print these below  values 
			@define (Name1, "John");		 	
			@define (Name2, "Soham");
        	@define (Name3, "RamMilan");
			function print_age(){ // using function 

			$agelimit= 60;
			$age1=50;			// john age 
			$age2=60;			// Soham age
			$age3=64;			// Rammilan age 
echo "<hr>";
echo ($age1>=$agelimit)? Name1. " is senior citigen " : Name1. " is not senior citigen ";
echo "<br>\n\n";

echo ($age2>=$agelimit)? Name2. " is senior citigen " : Name2. " is not senior citigen ";
echo "<br>\n\n"; 

echo ($age3>$agelimit)? Name3. " is senior citigen " : Name3. " is not senior citigen ";
}
print_age();



// example 5 // using function for print this below 
echo "<h2>5) Find the Kids who can eat free pizza</h2>";
@define (Name4, " Herry, Garry ");  // define 1st  name 

@define (Name5, " Mogli, Shogli ");	// define  2nd name 

@define (Name6, " Moni,  Soni ");	// define 3rd  name 

function pizza_fun(){

$agelimit=10;

$child1=9;			// 1st child age 
$child2=14;			// 2nd child age	
$child3=6;			// 3rd child age

echo "<hr>";
echo ($child1<= $agelimit)? Name4. " is Eligile for free pizza ": "Sorry,".Name4." You are not elligible for free pizza ";
echo "<br>\n\n";

echo ($child2<= $agelimit)? Name5. " is Eligile for free pizza ": "Sorry,".Name5." You are not elligible for free pizza ";

echo "<br>\n\n" ;

echo ($child3<= $agelimit)? Name6. " is Eligile for free pizza ": "Sorry,".Name6." You are not elligible for free pizza ";

}
pizza_fun();


echo "\n\n" ;
?>
</body>
</html>