<?php 
class Over{
function paresnt_class(){
	echo "from parent class\n";
}
}

class ride extends Over
{
function paresnt_class(){
	echo "from child class\n";
	parent::paresnt_class();
}
}

$obj=new ride();

$obj->paresnt_class();
?>