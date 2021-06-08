<h1>interface assignement </h1>
<?php 
interface i1{
function method1();
}
interface i2{
function method2();
}
class calc implements i1,i2 {
	public $a;
	public $b;
	function method1(){
	 $this->a=$_REQUEST['height'];
	$this->b=$_REQUEST['base'];

	}
	public $area;
	public function method2(){
$this->area=$this->a*$this->b;
echo "Area of Rectangle is: ".$this->area;

	}

	// //example of destruct
	// function __destruct(){
	// 	echo "<br><h3>Area is calculated.!<h3>";
	// }


}



 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>
		
		Area Calc
	</title>
</head>
<body>
<form method="post" >
	<table>
		<tr><td>Enter height :</td><td><input type="text" name="height"></td></tr>
		<tr><td>Enter width :</td> <td><input type="text" name="base"></td></tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="submit"></td>
		</tr>

	</table>
	

</form>
<?php
class c extends calc{
function __destruct(){
		echo "<h3>Thanks<h3>";
	}	
}
if (isset($_REQUEST['submit'])) {
$obj= new c();
// $obj->method1();
// $obj->method2();
$obj->method1();
$obj->method2();
	# code...
}

?>
</body>
</html>