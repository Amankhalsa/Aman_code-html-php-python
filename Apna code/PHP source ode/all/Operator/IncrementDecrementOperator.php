<!DOCTYPE html>
<html>
<head>
	<title>Increment and Decrement</title>
	<style type="text/css">
		h2,h3{color:blue;} body{margin-left: 50px ;max-width: 0 auto;} ol li{ display: block; padding: 10px;}
	</style>
</head>
<body>

<h2>1) Use ++ Increment and Use -- Decrement</h2>
<?php 
		  /*
     * ++ = Incremental by 1
     * -- = Decremental by 1
     *
     */

		  $counter=10;
		  $counter +=1;
		  echo $counter;
		
	 echo PHP_EOL ."<br>";
		  // ++ = Incremental by 1
// post increment 
	  	echo "<h3>Use ++ increment</h3>";
		echo "post increment <br>".$counter++  ."<br>";
		echo $counter ."<br>";
		 
echo PHP_EOL ."<br>";
// pre incriment 
		echo "++ pre incriment <br>". ++$counter; 
		echo PHP_EOL ."<br>";
	 	echo $counter;
echo PHP_EOL ."<br>";

//============================ Use -- Decrement==================
	 	 echo "<h3>Use -- Decrement</h3>";
	 	  $counter=10;
		  $counter -=1;
		  echo $counter;
		
echo PHP_EOL ."<br>";
		  //-- Decrement by 1
// post -- Decrement 
		echo "post -- Decrement <br>";
		 echo $counter--  ."<br>" ;
		 echo $counter ."<br>";
		 
echo PHP_EOL ."<br>";
echo "  -- pre Decrement <br>";
// pre -- Decrement
	 	echo --$counter ."<br>";
	 	echo $counter ."<br>
	 	bitwise pending 1.15";

 ?>
</body>
</html>