<?php
$to = "amansin31@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: diyaexamination@gmail.com";

if(mail($to,$subject,$txt,$headers)){
echo "Mail send Successfull";

	# code...
}else{
echo "Mail send  not Successfull";

}
?>