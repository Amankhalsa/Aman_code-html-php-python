<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Post Calc</title>
<link rel="icon" type="" href="favicon.png">
<link rel="stylesheet" type="text/css" href="post_input.css">
<link rel="stylesheet" type="text/css" href="btn.css">
</head>
<body>
<div class="btn_main">
  <button id="Divide"> Divide     </button>
   <button id="Subtract"> Subtract  </button>
    <button id="Multiply"> Multiply   </button>
     <button id="Addition"> Addition   </button>
    </div>
<form action="" method="POST">

	<div class="main">
<!--<fieldset>	
 <legend>All in one</legend>-->
 
<!--==============================================================================-->
<div class="part1" >

<h3>Devide:</h3>
	
	A:<input type="text" name="a"><br><br>
	B:<input type="text" name="b"><br><br>
	Submit:
	<input  class="sub_button" type="submit" name="submit1" value="submit"><br>
<?php 
if (isset($_REQUEST['submit1'])) {
	$a=$_REQUEST['a'];
	$b=$_REQUEST['b'];

	try {
		if ($b<=0) {
			throw new Exception("<strong>Error: Dear please enter grater then 0</strong>");
			
			# code...
		}else {
			@	$result1=$a/$b;
	echo "<br><b>Answer is : $result1<br></b>"	;
		}
	} catch (Exception $e) {
		echo $e->getMessage();
	}

	 }

	 ;?></div>	
<!--==============================================================================-->
<div class="part2" >	
<h3>Subtract:</h3>
	
	A:<input type="text" name="c"><br><br>
	B:<input type="text" name="d"><br><br>
	Submit:<input class="sub_button" type="submit" name="submit2" value="submit"><br><br>
<?php  
if (isset($_REQUEST['submit2'])) {
	$c=$_REQUEST['c'];
	$d=$_REQUEST['d'];
	@ $result2=$c-$d;
	echo "<b>Answer is : $result2<br></b>";
}



;?></div>
<!--==============================================================================-->
<div class="part3" >
	<h3>Multiply:</h3>
	
	A:<input type="text" name="e"><br><br>
	B:<input type="text" name="f"><br><br>
	Submit:
	<input class="sub_button" type="submit" name="submit3" value="submit"><br><br>
<?php 	
if (isset($_REQUEST['submit3'])) {
	$e=$_REQUEST['e'];
	$f=$_REQUEST['f'];
	@ $result3=$e*$f;
		echo "<b>Answer is : $result3<br></b>"; };?></div>
<!--==============================================================================-->
	<div class="part4" >
<h3>Addition:</h3>
	
	A:<input type="text" name="g"><br><br>
	B:<input type="text" name="h"><br><br>
	Submit:
	<input class="sub_button" type="submit" name="submit4" value="submit"><br>
<?php 
if (isset($_REQUEST['submit4'])) {
	$g=$_REQUEST['g'];
	$h=$_REQUEST['h'];
	@ $result4=$g+$h;
	echo "<br><b>Answer is : $result4<br></b>"	;}
 ;?>
</div>
<!--
  </fieldset>-->

</div>

</form>
<!--<script src="jquery.js"></script>-->
 <script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script type="text/javascript">	
$(document).ready(function(){

$('#Divide').click(function(){	
	$('.part1').toggle('fast');
})

$('#Subtract').click(function(){	
	$('.part2').fadeToggle('fast');
})
$('#Multiply').click(function(){
	$('.part3').fadeToggle('fast');
})
$('#Addition').click(function(){
	$('.part4').fadeToggle('fast');
})
});
</script>
</body>
</html>