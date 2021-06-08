<?php 

	$file_name="content.txt";

	 $content=file_get_contents($file_name);
	 echo $content.PHP_EOL;

	 	$file_handler=fopen($file_name, "r");
	 	$file_size=filesize($file_name);

	 	$content=fread($file_handler, $file_size);
	 	echo $content;
	 	fclose($file_handler);


/*
	if( file_exists($file_name) ){
        if( is_file($file_name) ){
            //Do the File Operation Here
        }
    }*/

    //Write Operations - Method 1
    $file_handler=fopen($file_name,"w+") or die("Unable to write the file.");
    fwrite($file_handler, "This is a modified Content!");
    fclose($file_handler);

	$file_new="New_file.txt";
	file_put_contents($file_new, "\nhello this is a new file ");
	$conte=file_get_contents($file_new);
	echo $conte;		 	
 ?>