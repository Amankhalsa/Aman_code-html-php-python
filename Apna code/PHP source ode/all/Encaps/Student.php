<?php 
//Good example of Encapsulation:
class Student{

	private $id;
	private $name;
	private $Class;
	//setter method 
	function setId($id){
		$this->id=$id;

	}
	//getter method 

	function getId(){
		echo "student id is : $this->id \n\n" ;
		return $this->id;
	}
	//setter method 
		function setname($name){
			$this->name=$name;

		}
	//getter method 

		function getname(){
		echo "student Name is : $this->name \n\n";

			return $this->name;
		}
	//setter method 

			function setClass($Class){
				$this->Class=$Class;
			}

	//getter method 

			function getClass(){
				echo "Student Class is $this->Class \n\n";
				return $this->Class;
			}


}

echo "Good example of Encapsulation:\n\n";
	$obj=new  Student();
	$obj->setId(106);
	$obj->getId();
	 $obj->setname("preet");
	 $obj->getname();
	 $obj->setClass("9th");
	 $obj->getClass();


 ?>