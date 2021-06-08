<center><ul style="display: inline">
	<li><h3>
	<li>1) Define and Use Constant</li>
	<li>2) Change the value of Constant</li>
	<li>3) Same name with Variable and Constant</li>
	<li>4) Naming Rules of Constant</li>
	<li>5) isset method for Constant</li>
</h3>
</li></ul>

<?php 
      // sampole 1 
		// define a constant 
		define ("LANGUAGE", "PHP");

		$lang=LANGUAGE;
		echo $lang;

echo "<hr>\n";
		 // sample 2 

		define("LANGUAGE", "java");
		echo "this printing from using $" .$LANGUAGE. "\n<br>";
		echo "this printing from " .LANGUAGE. "\n<br>";

echo "<hr>\n";
		echo $lang;
// sample 3 


echo "<hr>\n";
		$LANGUAGE = "python";

		echo "here when we wana to use constant variable ".$LANGUAGE."\n<br>";
echo "<hr>\n";

		// sample 4th 
		define ("VERSON", 7.3);
		echo'verson is :' .VERSON;


		//sample 5th 
		define ("NAME", "aman");
	echo isset($NAME); 
		echo "<hr>";

    // 6th 

		echo constant('NAME');

		echo "<hr>\n";
 ?>
 </center>