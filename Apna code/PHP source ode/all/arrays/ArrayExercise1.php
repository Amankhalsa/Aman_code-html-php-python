<?php 
/*
1) Define Indexed Array and Associative Array.
2) Use Employee Details as Array
3) Display using foreach
*/

$employid=[100,101,102];
//print_r($employid);
foreach ($employid as $value) {
	echo " Emp id:".$value.PHP_EOL;
	# code...
}
print "\nEmploy Details:\n";
$employ_detail=[

		"100"=>
			[
			"Name" => "Meet singh",
			"job" => "PHP developer"
			],
		"101"=>
			[
			"Name" => "Hemant singh",
			"job" => "Senior PHP developer"
			],

		"102"=>
			[
			"Name" => "Robin singh",
			"job" => "Web developer"
			]
];

foreach ($employ_detail as $key => $value) {
	foreach ($value as $keys=> $emp) {
		echo"\tEmp id: $key, $keys = $emp".PHP_EOL;
		# code...
	}
	# code...
}
 ?>