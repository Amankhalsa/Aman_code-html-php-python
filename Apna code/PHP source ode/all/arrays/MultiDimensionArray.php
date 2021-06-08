<?php 

	$arr=[1,2,3,4,5];
	print_r($arr);
$userdetails=[
	"john"=>"john@gmail.com",
	"jenny"=>"jenny@gmail.com",
	"Ajit"=>"ajitpal@gmail.com",
	"preet"=>"preetharpal@gmail.com"
];
print_r($userdetails);


$arr2=[
		[1,2,3,4,5],
		[6,7,8],
		[9,10]
];
//print_r($arr2);
echo "\n\t with for each \n";
foreach ($arr2 as $value) {
	//print_r($arr2).PHP_EOL;
	foreach ($value as $key =>$value2) {
		print "Array value = [$key] ".$value2.PHP_EOL;
		# code...
	}
	

	# code...
}

echo "\nuser detail\n";
$userdetails2=
[
	'studentlist1'=>[
'1'=>	'Amandeep Singh',
'2'=>	'Gagandeep Singh',
'3'=>	'Jasmeen Sidhu',
'4'=>	'Jaskirat Singh',
'5'=>	'Khushal Ahuja',
'6'=>	'Khushboo',
'7'=>	'Khushdeep Singh',
'8'=>	'Kunal Sharma',],
	
	"Studentlist2"=>[

'9'=>	'Lovedeep Singh',
'10'=>'Manavdeep Singh',
'11'=>'Mankiranpreet Kaur',
'12'=>'Pankaj Sharma',
'13'=>'Ram Milan',
'14'=>'Rajveer Singh',
'15'=>'Rehan',
'16'=>'Subhdeep Singh',
'17'=>'Sukhmanpreet Kaur']
];

print_r($userdetails2).PHP_EOL;
var_dump($userdetails2).PHP_EOL;
echo "\t\t Using foreach \n";
$counter=1;
foreach ($userdetails2 as $key => $value) {
echo "[ $key \n";
foreach ($value as $value2) {
	echo " [$counter] => ".$value2.PHP_EOL;
	$counter++;

}
echo "]";
}

$studentlist4=[
'9'=>'Lovedeep Singh',
'10'=>'Manavdeep Singh',
'11'=>'Mankiranpreet Kaur',
'12'=>'Pankaj Sharma',
'13'=>'Ram Milan',
'14'=>'Rajveer Singh',
'15'=>'Rehan',
'16'=>'Subhdeep Singh',
'17'=>'Sukhmanpreet Kaur'
];
 echo "\n".$studentlist4[9].PHP_EOL;
 echo "\n".$studentlist2[(10)].PHP_EOL;
 ?>