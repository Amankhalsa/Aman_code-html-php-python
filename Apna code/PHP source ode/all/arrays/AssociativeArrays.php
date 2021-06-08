
<?php 
    //In Associative Arrays, you specify the index.
    //index => value
    // => is a special symbol to represent key and value.
    //key => value - key is the index and value is the value at that index.

    //Indexed Array
$arr=["sun","mon","tue","wed","thurs","fri","sat"];
var_dump($arr);
foreach ($arr as $value) {
echo $value.PHP_EOL;
	# code...
}

//Associative Arrays
echo " \n Print R \n";
$arr=["Monday"=>"mon",1=>"tue",2=>"wed",3=>"thurs",4=>"fri","Five"=>"sat"];
print_r($arr).PHP_EOL;
foreach ($arr as $value) {
echo $value.PHP_EOL;
	# code...
}
echo " \n NEW with key \n";
foreach ($arr as $key => $value) {
echo "$key => $value".PHP_EOL;
	# code...

	# code...
}

echo " \n Only  key \n";
// only key print using method 
print_r(array_keys($arr));

// for each for keys 
foreach (array_keys($arr) as $key  ); {

	echo $key.PHP_EOL;
	# code...
}
echo "\nAgain for each last \n";
foreach ($arr as  $value) {
	# code...
	echo $value.PHP_EOL;

}


 $userDetails[0] = "user@gmail.com";
    var_dump($userDetails);

    echo $userDetails[0] . PHP_EOL;

    //Guess the Output
    $userDetails[] = [ "Jane" => "jane@gmail.com" ];

  

$userdetails=[
	"john"=>"john@gmail.com",
	"jenny"=>"jenny@gmail.com",
	"Ajit"=>"ajitpal@gmail.com",
	"preet"=>"preetharpal@gmail.com"
];

$userdetails['aman']="aman@gmail.com";
$userdetails['diya']="diyaschool@gmail.com";




print_r($userdetails).PHP_EOL;


echo $userdetails["preet"].PHP_EOL;
 $student=[	
 			 'student Name'=>"Robin",
			 "Address"=>"Vikas Nagar gali no 10",
			 "Email-id"=>"Robin@gmail.com","Phone"=>+161254037];
			 if (isset($student)) 
			 {
			 
			 	 print_r($student);
			 }
			 else
			 {
			 	print "data is not set";
			 }

$nullprint=null;
echo "null = ".print_r($nullprint);

 ?>