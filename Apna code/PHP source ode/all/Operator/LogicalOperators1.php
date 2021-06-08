<!DOCTYPE html>
<html>
<head>
	<title>lOGICAL OPERATOR </title>
	<style type="text/css">
		h2{
			color:blue;

		}
	body{
			margin-left: 50px ;
			max-width: 0 auto;
		}
		 ol li{ display: inline; padding: 10px;}
	</style>
</head>
<body>
	<ol><li> *  AND - both should be true</li>
     	<li>*  OR - any one can be true</li>
     	<li>*  && - both should be true</li>
    	<li>*  || - any one can be true</li> 
    	<li>*  ! - if not</li> </ol>
<?php 

	  /*
     *  AND - both should be true
     *  OR - any one can be true
     *  && - both should be true
     *  || - any one can be true
     *  ! - if not
     *
     */
	  		// ==============================================sample 1====================================================== 
	 ECHO "<H2>1) Greet Hello, Name if the user is logged in and has permission</H2>";
	 //===================================Constant example ==================================================
	 	@define (PERMISSION, True);
	 	@define(Login, True);
	 	function print_login(){  // ===============using function here==================== 

	 	$user ="John, smith ";
	 	// in AND - both should be true
	 	echo (PERMISSION and Login)?" Hello, $user ":" hello Guest";

		
	 	}
	 	print_login();
	 	 				echo "<br>".PHP_EOL;
	 	  //=============================== variable example 2nd part of 1st sample========================== 
	 	  // in AND - both should be true
	  				// =========using simple example with variable================== 
	  	$permission = false;		
	    $loggedin = true;
   		$user = "John, Smith";

    echo ( $permission and $loggedin ) ? "Hello $user" : "Hello, Guest";
   		 				echo "<br>".PHP_EOL;
   		 		// ==============================================sample 2 ====================================================== 
   		 		//=================================OR - any one can be true===================
	 ECHO "<H2> 2) Check if student passed any one exam</H2>";
	 			$student = "Preet ";
	 			$mathpassed=True;
	 			$scipassed=false;
	 			echo ($mathpassed or $scipassed)? "$student has passed ":"$student has not passed ";
	 					 	echo "<br>".PHP_EOL;
	 			// when both false conditions
	 			$student = "Preet  ";
	 			$mathpassed=false;
	 			$scipassed=false;
	 			echo ($mathpassed or $scipassed)? "$student has passed ":"$student has not passed ";
	 					 	echo "<br>".PHP_EOL;
	 ECHO "<H2>3) Find the difference between and &&</H2>";
	 				//&& - both should be true
	 			$result1= (true && true)?"True":"false";

	 			$result2= (true and true)?"True":"false";
	 			 echo "Result 1 ".$result1;
	 			 	echo "<br>".PHP_EOL;
	 			 echo "Result 2 ". $result2;


	 ECHO "<H2>4) Find the difference between or ||</H2>";
	 			// ==============================================sample 3 ====================================================== 
	 			//============================= || - any one can be true=====================
	 		$result1= (true or true)?"True":"false";
	 			
	 			$result2= (true || true)?"True":"false";
	 			 echo "Result 1 ".$result1;
	 			 	echo "<br>".PHP_EOL;
	 			 echo "Result 2 ". $result2;

	 ECHO "<H2>5) Check if student is not passed and print the results </H2>";

	 		// ==============================================sample 4  ==========================================================
	 		// ! - if not 

	 		$total=34;
	 		$passingmarks=35;
	 		$result=($total>=$passingmarks)?true:false;
	 		echo "<br>".PHP_EOL;
			// ! - if not 

	 		echo (!$result)?"  Condition is True":"  Condition is false ";
	 		// 2nd example  without 

	 		echo "<br>".PHP_EOL;
	 		$total=30;
	 		$passingmarks=35;
	 		$result=($total>=$passingmarks);
	 		echo "<br>".PHP_EOL;

			// without ! - if not 
	 		echo ($result)?" Condition is True":" Condition is false ";

 ?>


</body>
</html>
