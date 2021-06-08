<?php
$q1 = ( !empty($_GET['q1'] ) ) ?  $_GET['q1']: 0;
$q2 = ( !empty($_GET['q2'] ) ) ?  $_GET['q2']: 0;
$q3 = ( !empty($_GET['q3'] ) ) ?  $_GET['q3']: 0;
$marks = 0;

if($q1 == 1){
    $marks += 10;
}
if($q2 == 1){
    $marks += 10;
}
if($q3 == 1){
    $marks += 10;
}

echo "Result: " . $marks . "<br>";

?>
