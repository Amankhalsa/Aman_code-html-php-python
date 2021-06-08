<?php 

class FileHelper{
		

	static function hasdata($filename){

			if(!file_exists($filename)){
				echo "$filename not found";
				return false ;
			}
			$content=file_get_contents($filename);
			if (empty($content)) {
				echo "file is empty";
				return false ;
				# code...
			}else {


			return $content;
			}

	}
}

echo FileHelper::hasdata("test.txt");
FileHelper::$content;

 ?>