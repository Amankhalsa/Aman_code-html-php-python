<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  protected $color;
  private $weight; 
 function getcolor($color){
  	 $this->color= $color;
return $this->color;
}
 function getweight($weight){
  	 $this->weight= $weight;
return $this->weight;
}
}
$mango = new Fruit();
echo "Fruit name is :". $mango->name = 'Mango'."\n<br>"; // OK
//$mango->color = 'Yellow'; // ERROR
echo  "\ncolor is " .$mango->getcolor('Yellow') ."\n";
echo "<br>";
//$mango->weight = '300'; // ERROR
echo "Mango weight is :". $mango->getweight(300)." Gram \n";
?>
 
</body>
</html>
