<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>MYSQLl </title>
</head>
<body>
<h1>SQLi - Check connection </h1> 
    <?php 
        //$dns="mysql:host=localhost;dbname=schooldb";
    	$hostname="localhost";
    	$dbname="schooldb";
        $username="root";
        $password="mysql";

        try {
        	//established connection 
        
        	
             $db= new mysqli($hostname, $username, $password, $dbname);


             if ($db->connect_error) {

              die("<b>Connection failed:</b> " . $db->connect_error);
             }
			
             //close connection 
             $db->close();

        }catch (Exception $e) {
           $error_message =$e->getMessage();
           echo "<p><big><b>Error message:</b></big> <span style=color:red;>Not coooected</span> $error_message</p>";

                }



                ?>
</body>
</html>
