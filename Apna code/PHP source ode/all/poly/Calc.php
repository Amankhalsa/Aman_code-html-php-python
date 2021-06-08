<?php 
interface Calcu{
		function add($a,$b);
}
class Addition implements Calcu{
		function add($a,$b){
			$result=$a+$b;
			echo "<h2>Addition  of $a, $b is -----> $result </h2>\n";
			}
}
class Subtract implements Calcu{
		function add($a,$b){
			//echo "Subtraction  is ";
			$result2=$a-$b;
			echo "<h2>Subtraction of $a, $b is -----> $result2</h2> \n";
		}
	
}
class Multiplcation implements Calcu{
		function add($a,$b){
			//echo "Subtraction  is ";
			$result3=$a*$b;
			echo "<h2>Multiplcation of $a, $b  is -----> $result3</h2> \n";
		}
	
}
class Division implements Calcu{
		function add($a,$b){
			//echo "Subtraction  is ";
			$result4=$a/$b;
			echo "<h2>Division  of $a, $b is -----> $result4 </h2>\n";
		}
	
}
$obj=new Subtract();
$obj->add(13,5);
echo "<br>";
$obj2=new Addition();
$obj2->add(14,5);
echo "<br>";
$obj3=new Multiplcation();
$obj3->add(14,5);
echo "<br>";
$obj4=new Division();
$obj4->add(100,5);


//Polymorphism example can be shown with interface or abstract class
// interface Database{

//     //Child Classes must implement this methods.
//     function openConnection($a,$b);

// }

// class OracleDatabase implements Database{

//     //Same Name but Different Form
//     function openConnection($a,$b)
//     {
//     	$sub= $a+$b;
//        echo "Using the Oracle Driver to establish the connection $sub <br>";
//     }
// }

// class MySQL implements Database{

//     //Same Name but Different Form
//     function openConnection($a,$b)
//     {
//     	$sum= $a+$b;

//         echo "<br>Using the MySQL Driver to establish the connection $sum";
//     }

// }

// $obj=new MySQL();
// $obj->openConnection(14,5);
// echo "<br>";

// $obj2=new OracleDatabase();
// $obj2->openConnection(2,1);



 ?>