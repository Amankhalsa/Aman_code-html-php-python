<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<h1> Local and global variable </h1>
<?php
    $fruit ='orange'; //  global variable
    function fruit(){
        GLOBAL $fruit; // need define globsl name with variable
        //$fruit ='Apple'; // these are  local variable  capital can use
        $qyt    = 25;
        $price    =12;
        $totalprice    = $price*$qyt;
            echo 'The price of ' .$fruit. ' is ' .$totalprice;
        
    } //function end here
    fruit()             // calling to function by use this 
        // echo $fruit;  // cant use  then see result 
    ?>

<body>
</body>
</html>