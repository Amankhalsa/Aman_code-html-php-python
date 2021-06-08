

<h1>Define a Variable</h1>
 <h2>1st example </h2>
 <!--.........................1st example ...........................................-->
<?php 
// sample 1 


$name ="Amanpreet singh khalsa";
function print_name(){

echo "<h2>from inner of function</h2>";

	
}
// calling to function 
print_name();
 ?>
 <!--.........................2nd example ...........................................-->
 <hr>
 <h2>2nd example </h2>
 <?php 
// sample2 
//define globals variable 
Global $name2;
$name2="Amanpreet singh khalsa<br>";
function print_name2(){
// here not define global variable inner of function 
echo "<br><h1>Name is not printing</h1>";
echo $name2; // this will not print show error 

}

print_name2();
echo $name2;
  ?>
<!--.........................3rd example ...........................................-->

 <hr>
 <h2>3rd  example </h2>

<?php 
// sample 3rd 
//define global  varibal e
Global $name3;
	// then define value of globals variable 
		$name3 = "<h1>Now print globals variable data</h1>";
function print_name3(){
	//global variable  define innner of function 
Global $name3;
// here now text will be changed 
$name3= "<h2>Php is programing printing printing from  changed velue <h3>";

echo $name3;
}
print_name3();
echo $name3
 ?>
