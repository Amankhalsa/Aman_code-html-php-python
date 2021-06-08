<?php 

// i have seen multiple class can be  access by this method 
trait university{


		function getfilesize($filename){

			return filesize($filename);
		}
}
class student {
	use university;
function checkfilesize($filename){


	return $this->getfilesize($filename);


}

function get_cont($filename){
//$this->contesnt=$contesnt;
		$contesnt =file_get_contents($filename);
		return $contesnt;
}

}
$obj= new student();
echo 'file size is :'.$obj->checkfilesize("test.txt");

echo "\n\n";
echo "file content is : \n";
echo $obj->get_cont("test.txt");
echo "\n\n";
 ?>