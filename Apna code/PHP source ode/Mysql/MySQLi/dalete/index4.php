<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>MYSQLl </title>
</head>
<body>
	<table>
<h1>SQLi - Check connection </h1> 
   
<?php 

 //include "del.php";

// if set 
   if (isset($_REQUEST["submit"])) {
        //post to  variable 
    $id_num=$_POST["ID"];
    $U_Name=$_POST["name"];
   

        } 



        ?>

    <?php 

        //$dns="mysql:host=localhost;dbname=schooldb";
        // include "add.php";
            //  delete  query from database  
         $query=  "DELETE FROM student WHERE ID =$id_num ";
                //$query=  "DELETE FROM student WHERE ID =$del";
        //below update query
       // $query=   "UPDATE `student` SET `NAME`='$U_Name' WHERE `ID` =$id_num";
        //below insert query
      //  $query="INSERT INTO `student`(`ID`, `NAME`) VALUES ('$id_num','$U_Name');";
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
            if($db->query($query)===TRUE){
                // if data updated 
                ECHO "<p><big>This $id_num no is Deleted !</big></p>";
                    //if not updated 
            }else {echo "Not Deleted ";}
             	        //Loop all the records using fetch records
            
             //close connection 
             $db->close();

        }catch (Exception $e) {
           $error_message =$e->getMessage();
           echo "<p><big><b>Error message:</b></big> <span style=color:red;>Not coooected</span> $error_message</p>";

                }



                ?>
                </table>

</body>
</html>
