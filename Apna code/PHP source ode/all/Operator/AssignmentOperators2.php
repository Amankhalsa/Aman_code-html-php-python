<!DOCTYPE html>
<html>
<head>
	<title>Assignment 2</title>
	<style type="text/css">
		h2{color:blue;}
		body{margin-left: 20px ;}
	</style>
</head>
<body>
	<blockquote>

<h2>1) Show Examples using Arithmetical Operator</h2>
				<?php 
					$number1=10;
					$number2=20;
					$add=$number1+$number2;
					echo "Result is :".$add;
									 ?>
<h2>2) Show Examples using Conditional Operator</h2>
				<?php 
					$age1=20;
					$age2=61;
					$agelimit=60;
					$nam3="john";
					$name="ibrahim";

					echo ($age1>=$agelimit)?" $nam3 You are senior citizen ":" $nam3 you are not senior citizen ";
			 		echo "<br>";
			 		echo ($age2>=$agelimit)?" $name You are senior citizen ":" $name you are not senior citizen ";		
									 ?>
<h2>3) Show Examples using Comparison Operator</h2>
				<?php 
						$minmarks=33;
						$passmarks=33;
						$obtainmarks=45;
						echo ($obtainmarks>=$passmarks and $minmarks)?" pass ":" fail ";

									 ?>
<h2>4) Show Examples using Logical Operator</h2>
				<?php 
				$username=true;
				$password=true;
				echo ($username && $password)? " Hello, Welcome  user you have login":" Sorry, user username or password is wrong";
				 					?>
	<h2>5) Show Examples using Assignment Operator</h2>
				<?php 

						 $value1=10;
						 $value1+=$value1;
						 echo "Assignment operator result value is :".$value1;


					 				?>
	<h2>6) Show Examples using Increment and Decrement Operator</h2>
				<?php 
							$val=40;
							echo "Incremented result :".++$val;

								echo "<br> Decrement result :".-- $val;
								echo "<br> Decrement result :".-- $val;
						 			?>
	<h2>7) Show Examples using Bitwise Operator</h2>
				<?php 
						      $firstname="2";
						      $secondname="3";
						      echo $firstname ^ $secondnam ;
					 				?>
	<h2>8) Show Examples using Execution Operator</h2>
				<pre>
				<?php 
						      echo `dir`;
					 				 ?>
					 				 	
					 				 </pre>
	<h2>9) Show Examples using Error Control Operator</h2>
				<?php 
							@$val= 1/0;
							echo $php_errormsg;
									 ?>
	<h2>10) Show Examples using Operator Precedence</h2>
	    		<?php 
	    						$v1= false and  true ;// lower precedence 
	    						$v2= true and  false ;	// lower precedence 
	    						$v3= false && true ;// higher precedence 
	    						$v4= true && false ;// higher precedence 
	    							echo  "<h3>Lower precedence </h3> ";
	    						echo ($v1)? "true" :"false";
	    						echo  "<br>";
	    						echo ($v2)? "true" :"false";
	    						echo  "<h3>higher precedence </h3> ";
	    						echo ($v3)? "true" :"false";
	    				
	    						echo  "<br>";
	    						echo ($v4)? "true" :"false";
	    				
	    							 ?>
</blockquote>
</body>
</html>
