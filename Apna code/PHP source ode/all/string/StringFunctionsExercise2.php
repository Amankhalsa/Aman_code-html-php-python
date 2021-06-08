<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 2: String Functions</h1>

<h2>Word Wrap the Long String</h2>
<?php 
		$count="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
proident\n";
echo "\n\nWord wraped :". wordwrap($count,21).PHP_EOL;
 ?>
<h2>Find and Replace the word in upper case</h2>
<?php  
echo "changed =".str_replace("dolor", "POUND", $count);

?>
<h2>Count number of words</h2>
<?php echo "Count =".str_word_count($count).PHP_EOL; 
if($count==true){
	echo strtoupper($count);
}

?>
<h2>Shuffle the Strings</h2>
<?php  echo "Shuffled=". str_shuffle($count).PHP_EOL;?>

</body>
</html>

