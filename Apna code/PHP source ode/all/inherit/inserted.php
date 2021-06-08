<!DOCTYPE html>
<html>
<head>
	<title>All Detail</title>
</head>
<body>

</body>
</html>
<div >
	
	<?php if (isset($_REQUEST['submit'])) 



	{
		?>
<h2> Your submited detail is here:</h2>
		<?php 

require_once "University.php";

$obj=new Teacher($name,$age,$subject);
$obj->get_teacher_detail();

echo "----------------------------------------------------";
 $obj2 =new University($University_name,$University_Address,$licence_no);
 $obj2->University_detail();



 ?>
		
	<?php } ?>
 
</div>