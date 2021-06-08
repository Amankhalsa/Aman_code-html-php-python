<!doctype html>
<html>
<head>
    <title>
        Variables
    </title>
</head>
<body>
<center>
    <h1>Exercise 1: Create and Display Variables</h1>
<?php 
        $name = "aman singh ";
       echo $name; 
 ?>
    <h2>String Variable:</h2>
       <?= 
            $message="this from  string varibale ";
       $message;  ?>
    <h2>Integer Variable:</h2>
    <?php 
            $Message= "Php is programing language Current";
            $verson=7.3;
            echo $Message." version is ".$verson;

     ?>
    <h2>Print Variable from Function:</h2>

        <?php 
            function Print_variable()
            {
                $preet= "this is from function";
                echo $preet ;
            }
            Print_variable();
         ?>
    <h2>Static Variable:</h2>

            <?php 
                   function print_static(){
                    static $singh=10;
                    $singh =$singh+1;
                    print $singh. "<br>";

                   }
                    
                print_static();
                print_static();     
             ?>

    <h2>Global Variable:</h2>
                <?php  
          $khalsa= "Khalsa mero roop hai khaas";
                    function Print_global(){
                         global $khalsa;
                            echo $khalsa;
                    }
                    Print_global();
                 ?> 
    <h2>Super Global Variable:</h2>
        <?php
                    function Print_global2(){
                            echo $GLOBALS['khalsa'];
                            echo " <br> PHP ".$GLOBALS['verson'];

                    }
                    Print_global2();
                 ?>
    <h2>Variables of Variables:</h2>
    <?php 
                $name= "PHP is programing";
                $hello ="name";
                echo $$hello;
     ?>
</center>
</body>
</html>


