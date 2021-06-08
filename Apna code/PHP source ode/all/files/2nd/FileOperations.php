<?php 

		
		$file_name="content.txt";
		if (file_exists($file_name)) {


		echo "file exists";
			copy($file_name, "copy.txt");
			//for copy
			copy("copy.txt", "copy1.txt");
			//for rename
			rename("copy1.txt", "Renamed.txt");
			//for copy
			copy("Renamed.txt", "Deleted_file.txt");
			//for delete
			unlink("Deleted_file.txt");
		
	}
	else 
		{
		echo "file does not exisit";
				}	


 ?>
