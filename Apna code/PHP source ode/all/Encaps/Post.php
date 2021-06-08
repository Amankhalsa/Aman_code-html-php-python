<?php 


// good example of encapsulation 
class Post{

		private $name;

				// set method for set value 
			function setName($name){
					$this->name=$name;

			}
			//Get method for return value 
			function getName(){
				echo " Name is $this->name \n";
				return $this->name;
			}
	}
$obj=new Post();
echo "Good Example of encapsulation:\n";
$obj->setName("Preet Singh");
$obj->getName();

 ?>