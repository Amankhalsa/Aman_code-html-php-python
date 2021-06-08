<?php 
if (isset($_REQUEST['submit1'])) {
	$a=$_REQUEST['a'];
	$b=$_REQUEST['b'];

	try {
		if ($b<=0) {
			throw new Exception("Error: Dear please enter grater then $b");
			
			# code...
		}else {
			@	$result1=$a/$b;
	echo "<br><b>Answer is : $result1<br></b>";
		}
	} catch (Exception $e) {
		echo $e->getMessage();
	}

	 }
 
if (isset($_REQUEST['submit2'])) {
	$c=$_REQUEST['c'];
	$d=$_REQUEST['d'];
	@ $result2=$c-$d;
	echo "<b>Answer is : $result2<br></b>";
}

 	
if (isset($_REQUEST['submit3'])) {
	$e=$_REQUEST['e'];
	$f=$_REQUEST['f'];
	@ $result3=$e*$f;
		echo "<b>Answer is : $result3<br></b>"; } 
if (isset($_REQUEST['submit4'])) {
	$g=$_REQUEST['g'];
	$h=$_REQUEST['h'];
	@ $result4=$g+$h;
	echo "<br><b>Answer is : $result4<br></b>"	;}
 ;?>