<?php 

class Animal
{
    protected $name;
    protected $hunt = false;

    function doesHunting(){
        if($this->hunt){
            echo "Yes, It hunts!" . PHP_EOL;
        }else{
            echo "No, It won't hunts!" . PHP_EOL;
        }
    }
}
class Dog extends Animal {
	function __construct($name, $hunt){
			$this->name=$name;
			$this->hunt=$hunt;


	}
	function makesount()
	{

		echo "From dog class woof woof ".PHP_EOL;
	}
}
class Tiger extends Dog {
	function __construct($name,$hunt)
	{
			$this->name=$name;
			$this->hunt=$hunt;

	}
	function makesount()
	{

		echo "From tiger  class  Greee Gree ".PHP_EOL;
	}
}

$dog1=new Dog("pug", false);
$dog1->makesount();
$dog1->doesHunting();

$tiger=new Tiger("Indian Tiger ", true);
$tiger->makesount();
$tiger->doesHunting();


 ?>