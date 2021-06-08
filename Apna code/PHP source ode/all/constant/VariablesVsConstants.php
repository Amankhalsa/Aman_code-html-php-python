<h1>Difference between Variable vs Constant</h1>
<center> 
	<?php  

// sample 1 
	$name= " Aman, preet ";
	define (name, " hello, aman ");
	echo $name .name;
	echo "<hr>";
// sample 2 
 
 $name= "john, smith";
 define (name, "khalsa , sweet");
 echo $name .name;
echo "<hr>";
 // sample 3 
function print_constant(){
	// constant have grlobal scope in function 

	echo $name .name;  //1 st value will print  of constant 
}
// any where you can use 
print_constant();