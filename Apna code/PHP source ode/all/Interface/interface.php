<?php 

require_once "Car.php" ;
require_once "Sportscar.php";

//require_once "Speed.php";
//1st 
$car1=new Sportscar();
$car1-> setname("Toyota GR Supra ");

$car1-> setmodel("2021");

$car1->setcolor("Blue");

$car1->name()->model()->color();
$car1->setspeed("155 mp");
$car1->getpeed();
echo "........................\n";

// 2nd object
$car2=new Sportscar();
$car2-> setname("Tesla");

$car2-> setmodel("2020");

$car2->setcolor("BLACK");

$car2->name()->model()->color();
$car2->setspeed("250 Km/h");
$car2->getpeed();

 ?>