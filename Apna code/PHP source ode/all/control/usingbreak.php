<?php 
 // break 
$i=0;

do {
	echo " Number $i \n";
	$i++;
	if ($i>=10) {
		break;	
	}
} while ( true);

// Multiple loop 
print "\n\n\n Multiple loop \n\n";
$loop1=1;
$loop2=1;
$loop3=1;
for (; $loop1<=10; $loop1++){
while ($loop2 <= 10) {
	do {
		if($loop3==5){
			break;
		}
		print " Loop 3 : $loop3 \n";
		$loop3++;	
	} while ($loop3 <= 10);
	if($loop2==6){break;}
	$loop2++;
	print " loop 2 : $loop2 \n";
}
if($loop1==7){break;}
	echo " Loop 1 : $loop1 \n";
}

 ?>

