<!DOCTYPE html>
<html>
<head>
	<title>Operators</title>
</head>
<body>
<?php 
			/*
				Addition = +
				Minus = -
				Divison =/
				Module = %
				Exponent =**

			*/
				//sample 1 
				//calc marks 
		echo "<h3>1) Calculate the Student Total Marks for 3 Subjects</h3>\n\n";
				$math=40;
				$hindi =55;
				$Sci=65;
				$totalmarks= $math+$hindi+$Sci;
				echo "1 Total Marks of student $totalmarks for subject Science($Sci) + Math($math)+ Hindi($hindi)". PHP_EOL;

			// sample 2 
				echo "2 Total Marks of student $totalmarks for subject Science($Sci) + Math($math)+ Hindi($hindi)". PHP_EOL;
		echo "<h3>2) Display the total without a $totalMarks Variable</h3>\n\n";

				echo "3 Total Marks of student " .($math+$hindi+$Sci). " for subject Science($Sci) + Math($math)+ Hindi($hindi)". PHP_EOL;

		echo "<h3>3) Find the difference between marks achieved and total marks</h3>\n\n";
				// sample 3rd 
				$subjecttotal =300;
				$difftotal=$subjecttotal-$totalmarks;
				echo "4 Diffrence of total and achived marks is : $difftotal". PHP_EOL;

 				 // sample 4th 
				// Finde area 
		echo "<h3>4) Calculate the area using length and breath</h3>\n\n";
				$length= 30;
				$width= 20;
				$area= $length*$width;
				echo "5 Area of $length and $width is : $area". PHP_EOL;

		echo"<h3>5) Calculate the Percentage of Overall Scored Marks</h3>\n\n"; 
				// sample 5th

				$percentage= ($totalmarks/$subjecttotal)*100;
				echo "6 Percentage of total marks is $percentage%". PHP_EOL;

			echo "<h3>6) Check if the remainder is 0 or 1</h3\n\n";
					// sample 6th

					$a= 77 %5;
					echo $a .PHP_EOL; 

					$b= 73 %4;
					echo $b .PHP_EOL; 
			echo "<h3> 7)  Use Exponent Operators  </h3>\n\n";

			$a=10;
			$b=20;
			$result =($a **2) *($b**2);
			echo "Exponent Operators result is: ". $result;

			echo "<h1>last  22:31</h1>"
		?>


</body>
</html>
