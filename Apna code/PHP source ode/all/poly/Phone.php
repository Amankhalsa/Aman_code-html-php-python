<?php 
 interface Phone{

 	function Appinstall();

 }
class Ios  implements Phone {

			function Appinstall(){
				echo "App Store for ios \n";
				echo "The App Store is a digital distribution platform, developed and maintained by Apple \n";
			}

}

class Android implements Phone {
function Appinstall(){

	echo "Google Play for Android \n";
	echo "Get apps for your new Android device, on Google Play\n\n";
	echo "Enjoy millions of the latest Android apps, games, music, movies, TV, books, magazines & more. Anytime, anywhere, across your devices.\n";
}

	
}



$obj=new Ios();
$obj->Appinstall();
echo ".................\n";

$obj=new Android();
$obj->Appinstall();
 ?>