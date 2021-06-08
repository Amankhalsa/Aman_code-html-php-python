<?php

	class Post{
		public $post;
		function __construct($post){
			$this->post=$post;


		}


	}

$obj1=new Post("This is post");
// echo $obj->post;
// echo "\n";
$obj2=$obj1;
$obj1->post="This is modified ";
echo $obj2->post;
echo "\n";


$obj2->post="This is modified too";
echo $obj2->post;
echo "\n";



$obj1=new Post("This is the first post ");
// echo $obj->post;
// echo "\n";
$obj2= clone $obj1;
$obj1->post="This post modifiesd ";
echo $obj2->post;
echo "\n";
?>