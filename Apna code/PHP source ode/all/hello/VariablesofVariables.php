<h1>How to use Variable of Variables</h1>
<center>
	<?php 

$male = "Aman, preet ";
$gender= "male";
// we can access male value using two doller sign 
//under this  below condition 
echo $$gender;  

	echo "<hr>";

?>

<?php 	$student = "Raman  and deep ";
	$class ="student";
	$group ="class";

echo $$$group;
echo "\n<hr>\n";
echo $$group;
echo "\n<hr>\n";
echo $group;
echo "\n<hr>\n";

echo $_SERVER ['PHP_SELF']; 