<pre>
<?php 

//1) Show the Time Minutes Difference between two times
//echo " \tTime in mellisecond :".time().PHP_EOL;
/*
$date1=time();
sleep(10);
$date2=time();
$diff=($date1 - $date2)/60;
echo $diff;

*/
 $date1 = time();
    sleep(2);
    $date2 = time();
    $diff = ($date1 - $date2) / 60;
    echo $diff .PHP_EOL;

$start=date_create("2020-05-2 10:05:01");

$end=date_create("2020-05-2 12:04:09");


$diff2=date_diff($start,$end);
print_r($diff2).PHP_EOL;

 ?>
 </pre>