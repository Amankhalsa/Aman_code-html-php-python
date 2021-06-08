<?php 
/*
1) Make a function getDiscountedPrice()
2) Pass Price and Discount percentage
3) Return the discountedPrice
Formula:
discounted_price = original_price - ( (original_price * discount) / 100 )
*/


function getDiscountedPrice($original_price,$discount){

$discounted_price=$original_price-(($original_price * $discount) / 10);
return $discounted_price;

}

echo " discountedPrice :". getDiscountedPrice(1000,.5).PHP_EOL;


 ?>