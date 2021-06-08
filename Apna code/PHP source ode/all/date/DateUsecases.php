<?php 
		echo "Today date is : ".date_create("now")->format("y-m-d").PHP_EOL;

			echo "Grater one day : ". date_create("+30 day")->format("y-m-d").PHP_EOL;

			echo "less one day : ". date_create("-1 day")->format("y-m-d").PHP_EOL;

			echo "\n\n";
?>

<br>
<h2>select values:</h2>
<select>

<?php
for ($i=0; $i<=10; $i++) { ;?>


	<option>
	<?= "Date is grater 10 day : ".date_create("$i day")->format(" Y-M-d ").PHP_EOL;?>
</option>
<?php 
      }
?>

</select>
<br><br>


<?php


$strtime=strtotime("2021-01-09 10:05:02");

echo "\n\n\t Current date is : ".date("Y-m-d h:i:s"); 
echo "\n\n\tAman Your 2021 birth day is:".date("D",$strtime );


			echo "\n\n";
if (time()>=$strtime) {


	echo "time is ahead :".time();
	# code...
}else {
		echo "time is not ahead";
}

 ?>