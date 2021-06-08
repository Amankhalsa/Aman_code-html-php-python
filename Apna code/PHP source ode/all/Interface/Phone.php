<?php 

interface Phone{
		public function makecall($number);
		public function sendmessage($number, $message);
}
class ios implements Phone {
			public function makecall($number){
						echo "Making call to $number  \n\n";
					}
			public function sendmessage($number, $message){
					echo "Send $message to $number\n";
					}

}
$obj=new ios();

$obj-> makecall(9779477625);

$obj-> sendmessage(9779477625," hello Aman");
echo "\n\t\t\t****** Thanks for using this code ******";

 ?>