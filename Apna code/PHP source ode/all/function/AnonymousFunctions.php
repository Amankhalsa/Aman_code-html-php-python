<?php 
/*
<?php 
//dynamic calling 
function add($a,$b):int{
	return $a+$b;

}
	$addfun="add";
	echo "result is :".$addfun(1,3).PHP_EOL;
 ?>
 */
$addfun=function($a,$b):int{
	$sum=$a+$b;
	return $sum;
};

echo $addfun(1,2).PHP_EOL;



$content ="This is string data";
$printcontent = function ()use($content){
	echo $content;
};
echo $printcontent();

 ?>