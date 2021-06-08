<?php 
 $inputvalue=0;
if($inputvalue<=0)
{
	goto aman;
}
exit();
aman:
echo "this is error block <br>\n";
for ($i=0; true; $i++) { 
	if($i==50){
		goto loop1;
	}
	# code...
}
loop1:
echo "Counter is $i\n";
 ?>


 <?php


  echo "<br>looop 2 $i " ;?>