<?php

    //Define a Variable
    $name = "John, Smith ";
    echo $name;
echo "<hr>";
    //Variable can be used as string or integer
    $message = 1;
    $message = "PHP is the best!<br>";
   // if we use  $message = 1;   // 1 will print 
    echo $message .  "<br>";
echo "<hr>";
    //Print variable with double quotes
    echo "name variable = $name" .  "<br>";
    // single quotes
    echo 'name variable = $name' .  "<br>";
echo "<hr>";
    //Variable Typing convert between string to integer or any data types.
    $length = "10";
    $breath = 20;
    $area = $length * $breath; //Variable Typing Example
    echo "Area: $area" . "<br>";
echo "<hr>";
    //Variables are case sensitive
    $Name = " Walter White";
    echo "$name is not equal to $Name " . "<br>";
echo "<hr>";
    //Variable Scope
    $counter = 1;
    function show_counter() {
    	// 2 will print 
        $counter = 2;
        echo $counter . " two is printed <br>";
    }
    show_counter();
    echo $counter . " one is ptinted now <br>";
echo "<hr>";
    //Global Variables
    global $count;
    $count =9;
    function show_global_counter() {
        $count = 2;
        echo $count . " function variable  value<br>";
    }
    show_global_counter();
 echo "<hr>";
    echo $count . " after function  value <br>";
echo "<hr>";
    //Static Variable
    function counter_static()
    {
        static $count = 5;
        echo $count . "<br>";
        $count = $count + 1;
    }
    counter_static();

echo "<hr>";
    //Predefined Variables
    function print_global_variable() {
        echo $GLOBALS['name']; // withour dollar sign 

    }
    print_global_variable(); // Gloably access 

echo "<hr>";
    //Variable of Variables
    $countofcount = "count"; // count variable value will print by this 
    echo $$countofcount;
echo "<hr>";
    //isset()
    echo isset ($$countofcount) ? "Variable is set value is $count ": "Variable is not setvalue is  $count";