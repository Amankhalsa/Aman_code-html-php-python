<?php 
 /*
     * 1) Syntax of if and else condition
     * 2) Check if the inputs given by user is correct.
     * 3) if condition statement without braces.
     * 4) Check if Student is passed or failed.
     *
     */

     //Sample 1
    //1) Syntax of if and else condition
    //Please follow the coding style.
 
 $one_boolean_varibale=true;

 if($one_boolean_varibale){
 	echo "This text is from if part ";



 }else{
		echo "This text is from else part ";
 	

 }

echo "\n\n <br>";
$one_more_boolen=false;


 if($one_more_boolen && $one_boolean_varibale ){
 	echo "This text is from if part ";



 }else{
		echo "This text is from else part ";
 	

 }


echo "\n\n <br>";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title> Control </title>
 </head>
 <body>

 	<?php if ($one_more_boolen ) { ;?>
 	
 		 <h1>This is from if statement </h1>
 	<?php }else { ;?>

 		<h1>This is from else statement </h1> 
 		<?php  } ;?>


 </body>
 </html>