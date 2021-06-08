<!DOCTYPE html>
<html>
<head>
	<title> </title>

</head>
<body>
	<h1><mark> How to use switch case in PHP project</mark><u>  file name is: ></u> 10php.php </h1> 
<?php 
				 $month = 1 ;  
				  
		 switch ($month) {
		 	case 1: 
		 	echo '<h2>january</h2>' ;
		 	break; 
			case 2:	
				echo 'february';
				break;
			case 3:
				echo 'march';
				break;
			case 4:
				echo 'april';
				break;
			case 5:
				echo 'may';
				break;
			case 6:
				echo 'june';
				break;
			case 7:
				echo 'july';
				break;
			case 8:
				echo 'august';
				break;
			case 9:
				echo 'september';
				break;
			case 10:
				echo 'october';
				break;
			case 11:
				echo 'november';
				break;
			case 12:
				echo 'december';

		 		# code...
		 		break;
		 	
		 	default:
		 		echo 'you entered wrong number please enter between  1 to 12 number';
		 		break;
		 }
 ?>
</body>
</html>