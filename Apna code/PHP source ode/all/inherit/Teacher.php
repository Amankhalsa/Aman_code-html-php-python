<?php 
require_once "University.php";

class Teacher extends University{

public $name;
public $age;
public $subject;
function __construct($name,$age,$subject){
if ($_REQUEST['submit']) {
$this->name=$_POST['name'];
$this->age=$_POST['age'];
$this->subject=$_POST['subject'];
	# code...
}
}
function get_teacher_detail(){
	?> 
<?= "<table border='1' cellspacing='1' cellpadding='10'>"; ?>
<?= "<th colspan='2' align='center'><h3>Teacher Detail:</h3></th></tr>".PHP_EOL; ?>
<?=	 "<td>Teacher Name is :</td><td>".$this->name.PHP_EOL."<br><br></td></tr>"; ?>
<?=	 "<td>Teacher age is :</td><td>".$this->age.PHP_EOL."<br><br></td></tr>"; ?>
<?=	 "<td>Teacher Subject is :</td><td>".$this->subject.PHP_EOL."<br><br></td></tr>"; ?>
<?= "</table>";?>
<?php  
}
}

// $obj=new Teacher($name,$age,$subject);
// $obj->get_teacher_detail();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Teacher</title>
 </head>
 <body>
 
 </body>
 </html>
  <!--

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Teacher Detail</title>
 </head>
 <body>
 	<form method="POST">
 <table border="1" cellspacing="5">

 <tr><th colspan="2" align="center">Enter here teacher detail:</th></tr>

<tr><td>Enter teacher Name </td><td><input type="text" name="name" required=""></td></tr>

<tr><td>Enter teacher age </td><td><input type="text" name="age" required=""></td></tr>

<tr><td>Enter teacher subject </td><td><input type="text" name="subject" required=""></td></tr>

<tr ><br><td colspan="2" align="center" ><input type="submit" name="submit"></td></tr>
 
 </table>
</form>
 </body>
 </html>
 -->