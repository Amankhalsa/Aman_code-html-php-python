<?php 
		/*
			1) Learn to use the following String Functions
			- Number of Words
			- Replace Strings
			- Reverse Strings
			- Remove White Spaces
			- Shuffle Strings
		 	- Find Position case insenstive.
			- Upper and Lowercase
			- Word Wrap the String and display it.
	
		*/

			$content="   Php is programing lanuage very easy to understand it   "; 
			echo "\"$content\"" .PHP_EOL;

			echo " Word of this string is =". str_word_count($content) .PHP_EOL;

			echo " Find and replace very to more :". str_replace("very", "more", $content).PHP_EOL;

			echo $content.PHP_EOL;


			echo "\nReverse string : ". strrev($content).PHP_EOL;
			echo "\n\n";
			$count="                      Full forms 
					Html =hypertext markup language 
					<p>= paragraph tag
					<b>=bold tag Css= cascading style sheet 
					DHCP - dynamic host configuration protocol            ";
			
			print "Remove White Spaces :". trim("$count").PHP_EOL;
			$name= "Aman";
			echo "Shuffle Strings :". str_shuffle($name).PHP_EOL;

			echo " Find Position case insenstive." .stripos($count, "commodo").PHP_EOL;

			echo "Upper and Lowercase :". strtolower($content).PHP_EOL;
			echo "Upper and Lowercase :".strtoupper($content).PHP_EOL;

			echo " Word Wrap the String and display it :".wordwrap($content,1).PHP_EOL;
 				print "Word count :". str_word_count($count);
 				?>