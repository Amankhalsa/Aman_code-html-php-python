<?php 
interface Animal{

function makesound();

}

class Dog implements Animal{

function makesound(){
	echo "Dog sound woff! woff! \n";
}

}


class Cat implements Animal{

function makesound(){
	echo "cat sound Meao! Meao! \n";
}

}
echo "That's Good example of polymorephism \n";
$obj=new Dog();
$obj->makesound();
echo "\n";
$obj2=new Cat();
$obj2->makesound();


 ?>