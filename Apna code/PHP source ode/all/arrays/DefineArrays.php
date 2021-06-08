<pre>
<?php 
	// example 1
	//Define an Array
    //Reference: https://www.php.net/manual/en/language.types.array.php
    //As of PHP 5.4 you can also use the short array syntax, which replaces array() with [].
    //$arr is a Array Variable
    //$arr[0] is a Array Element
    //0 is a index of Array
    //Array index starts with 0 not 1
    //Arrays can store any type of value - String, Integer or Boolean
    //Arrays has a length based on the number of elements it has.
    //You can have array inside an array - more about it in next lecture.
    //Usecase: Collection of variables together.

$student = [
"Name: Aman",
"Address: Punjab",
"City : Mandi Gobindgarh ",
"Pincode:147301",
"Ph. +91-9877497776" 
];
var_dump($student).PHP_EOL;
// example 2
print_r($student).PHP_EOL;


// example 3
echo $student[1].PHP_EOL;
// example 4
echo "Length =".count($student).PHP_EOL; //for length

// example 5
print_r($student).PHP_EOL; 

$student[0]="Name : Amanpreet singh".PHP_EOL;
$student[1]="Address : Adarsh nagar gali no 10 #415, sec 2/B".PHP_EOL;
echo "\nUpdated\n";
// example 6
print_r($student).PHP_EOL; 
echo "\n loop \n";
// example 7
for ($i	=0; $i<count($student) ; $i++) {
echo $student[$i].PHP_EOL; 
 	
 } 
ECHO "\nuning  constant accesss array by index \n";
 const AMAN=1;

 echo "{$student[AMAN]}";
 //las t mixed array 
 echo "\nLast mix \n";
$arr1 = [ 1,
        "String",
        false,
        23.244
    ];
    var_dump($arr1);

 ?>
</pre>