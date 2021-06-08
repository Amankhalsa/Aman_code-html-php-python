<?php 
require_once "Teacher.php";
class University {

public $University_name;
public $University_Address;
public $licence_no;

function __construct($University_name,$University_Address,$licence_no){

$this->University_name=$_POST['University_name'];
$this->University_Address=$_POST['University_Address'];
$this->licence_no=$_POST['licence_no'] ;


}

function University_detail(){
?>
<?= "<table border='1' cellspacing='1' cellpadding='10'>"; ?>
<?= "<tr><th colspan='2' align='center'><h3>University Detail:</h3></th>".PHP_EOL; ?>
<?= "<tr><td>University Name :		</td><td>".$this->University_name."</td>";?>
<?= "<tr><td>University Address :	</td><td>".$this->University_Address."</td>";?>
<?= "<tr><td>University licence no :</td><td>".$this->licence_no."</td>";?>
<?= "</table>";?>
<?php  
}
}
 // $obj =new University($University_name,$University_Address,$licence_no);
 // $obj->University_detail();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>University</title>
 </head>
 <body>
 

 </body>
 </html>


<!-- <!DOCTYPE html>
 <html>
 <head>
 	<title>Uniersity</title>
 </head>
 <body>
 	<form method="POST">
 <table border="1" cellspacing="5">

 <tr><th colspan="2" align="center"> University detail:</th></tr>

<tr><td>University Name </td><td><input type="text" name="University_name" required=""></td></tr>

<tr><td>University Address</td><td><input type="text" name="University_Address" required=""></td></tr>

<tr><td>University licence no </td><td><input type="text" name="licence_no" required=""></td></tr>

<tr ><br><td colspan="2" align="center" ><input type="submit" name="submit"></td></tr>
 
 </table>
</form>
 </body>
 </html>

 -->