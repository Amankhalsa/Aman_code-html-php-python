<?php 
class getdata{
public  $a;
public  $b;
public  $c;
// ame name mean its constructor 
function getdata(){
	$this->a=$_REQUEST['n1'];
	$this->b=$_REQUEST['n2'];
}
function display(){
	$this->c=$this->a+$this->b;
	echo "<h3>Adittion is ".$this->c."</h3>";
}

function __destruct(){
echo "<h2>Thanks </h2>";	
}

}
if (isset($_REQUEST['submit'])) {

	$obj=new getdata();
	// $obj->display();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
Odd Even
	</title>
</head>
<body>
<form method="post" action="">
<table border="1">
<tr><td>Enter 1st Value :</td><td><input type="text" name="n1"></td></tr>
<tr><td>Enter 2nd Value :</td><td><input type="text" name="n2"></td></tr>
<tr><td align="center" colspan="2"><input type="submit" name="submit"></td>
</tr><tr><td align="center" colspan="2"><?= @ $obj->display();?></td></tr>
	</table>
</form>
</body>
</html>