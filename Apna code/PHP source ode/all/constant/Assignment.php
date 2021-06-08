<!DOCTYPE html>
<html>
<head>
	<title>Assignment</title>
	<style type="text/css">
		h3{
			color:blue;
		}
		body {
			padding: 2em;
			background: skyblue;
			margin-left: 20px; 
		}
	</style>
</head>

<body>
<H3>1) Define and Assign $firstname and $lastname variable with your name.</H3>
<?php 
$firstname=" &nbsp; Amanpreet "; 
$lastname=" &nbsp; Singh "; 
echo " First name :".$firstname." <br>Last name :". $lastname;
 ?>
<H3>2) Print the firstname, lastname using echo / print</H3>
<?php 
$firstname=" Amanpreet "; 
$lastname=" Singh "; 
print " First name ".$firstname." <br>Last name ". $lastname;
 ?>
<H3>3) Embed the variable inside the quotes.</H3>
<?php 
		$VER= 7.3;
		// double quotes  
		echo " PHP is programing language version $VER";
		// single quotes 
		echo '<br> PHP is programing language version $VER';
 ?>
<H3>4) Define a function to print the name.</H3>
				<?php 

					function print_name(){
							$print_name ="Aman preet is from khalsa family ";	
							echo $print_name;
					}
					print_name();

				 ?>
<H3>5) Show PHP Variables are case sensitive.</H3>
		<?php 
					// name is 
				$NAME= " My name will be  blank here ";
				 $name=" This is changed of varibale "; 
				  echo $name. " <br> ".$Name ." <br> ".$NAME; // case sensitive example 

				 ?>


<H3>6) Create a local variable outside the function and define same inside the function. 
Display the variable.</H3>
				<?php 
							$message= " This is for function ";
					function print_local(){
						// define globaly 
							global $message;	
							echo $message;
							echo "<br> Globals printint  " .$GLOBALS['firstname'];
					}
					print_local(); //call to function 
 					?>
<H3>7) Define and show the Global Variable.</H3>

			<?php 
			 // example 1st 
					define (GLB,"this is for global printing " );
					function print_fun(){
						echo GLB;
					}
					print_fun();
			 // example 2nd 
					echo "<hr>";
					$diya= "diya international school";
					function  cbse(){
						echo $GLOBALS['diya']." <br>Affliliated to CBSE";
					}
					CBSE();

			 ?>
<H3>8) Define and show the Static Variable.</H3>
					<?php 
							

							function Print_count(){
								static $counter=10;
								$counter=$counter+1;
							print  $counter."<br>";

							}
							Print_count();
							Print_count();

							 ?>

<H3>9) Show a Super Global Variable.</H3>
				
						<?php 
							$ram="Backend code is  example of super globals ";
							echo $ram."  <B>\"location is\"</b> ". $_SERVER['PHP_SELF'];

						 ?>
<H3>10) Define and show Variable of Variables.</H3>

						<?php 
								$student="<b>Monika singla</b>";
								$school ="student";
								echo $$school;
						 ?>
<H3>11) Use the isset method using tenary operators.</H3>

						<?php 

								$School= "Lotus velly gurugaon";

									echo isset($School)? " School is found ":" This name is not exsist ";
								 ?>
<H3>12) Define and Display a Constant.</H3>		
							<?php 
									define (john, " <b style=color:red;>This name is alwayas used in programing </b>");
									echo john;
									 ?>

<H3>13) Show magic constant.</H3>

							<?php 
									print "This line is =". __LINE__;

								 ?>

</body>
</html>
