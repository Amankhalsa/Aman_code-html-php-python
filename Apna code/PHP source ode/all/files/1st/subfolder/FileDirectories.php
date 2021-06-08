<pre>
<?php 
/*
		1) List all Files in a Directory
		2) Check for Specific Files in a Directory
		3) Check If the Name is a Directory or File.
		4) Create Directory
		5) Copy Files between Directories.
*/

		//1) List all Files in a Directory
		// scandir method 

		$path="subfolder";
		$result= scandir($path);
		echo "<h3>";
		print_r($result);
		//var_dump(	$result);
		echo "</h3>";

		foreach ($result as $value) {
			if ($value !="." && $value!=".."){
				echo "$value". PHP_EOL;

			# code...
			}

			
		}
	
		/*echo "<pre> <h3>";
			var_dump($result);
				echo "</pre></h3>";*/
		//sample 2

		$directory=array_diff($result, [".",".."]);
		print_r($directory).PHP_EOL;
			foreach ($directory as $value) {
		
						echo "$value". PHP_EOL;
			
		}
					$result=glob("*.txt");
					print_r($result);

					if (!file_exists("new2")) {
						mkdir("new2");
						# code...
					}
					else {echo "<h2>file already exisst </h2>";}
					print_r($result);


copy("files/text 1.txt", "new")

 ?>
 </pre>