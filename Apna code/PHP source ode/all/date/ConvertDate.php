<blockquote>
<pre>
<h1>
<?php 
		$datearr=getdate();		
	//var_dump($datearr).PHP_EOL. "</br>";
		//print_r($datearr)."<br>" .PHP_EOL; 
	foreach ($datearr as $key => $value) {
	echo "$key => $value <br> ".PHP_EOL ;
		}
echo "<hr>";
echo "weekday : ".$datearr["weekday"]."<br>" .PHP_EOL;
echo "weekday : ".getdate()["weekday"]."<br>\n\n" .PHP_EOL;

echo "Current Month : ".getdate()["month"]."<br>" .PHP_EOL;
echo "year : ".getdate()["year"]."<br>" .PHP_EOL;
echo "Date : ".getdate()["mday"]."<br>" .PHP_EOL;
		?>
</h1>
</pre>
</blockquote>