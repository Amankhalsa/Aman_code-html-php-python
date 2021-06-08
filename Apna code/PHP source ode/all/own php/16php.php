<!DOCTYPE html>
<html>
<head>
	<title> CURD ARRAY </title>
</head>
<body>
	<H1><mark> curd array in php </mark></H1>
<?php 
//create 
		$john =[ "firstname"=>"amanpreet","lasrname"=>"singh","age"=>28, "city"=>"punjab"];
		/*$person =array("milkha", "singh");
		$person1=[];
		$person1[0]="jorawar singh";
//read
		/*echo $john[0]. "  ".$john[1]. " and ".$person[0]. " ".$person[1]. " are friends  bhai ".$person1[0];*/
 // by using echo method 
 echo $john["firstname"]. " ".$john["lasrname"]." <=before ";
 // update 
 $john["firstname"]="waheguru";
 echo "<br>".$john["firstname"]."   <= updated  ";
 // delete array 
  unset($john["firstname"]); 
 echo $john["firstname"];
 ?>
 <!--html tag -->
 <h1> var_dump method </h1>
 <pre>
 <?php 
 var_dump($john); ?>
 <h1> print_r method</h1><?php
print_r($john);

 ?>
</pre>
</body>
</html>