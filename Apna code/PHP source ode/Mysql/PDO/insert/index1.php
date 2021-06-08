
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>MYSQL PDO </title>
</head>
<body>
    <TABLE BORDER='1' cellpadding='05' cellspacing='05' >
<h1>PDO - Insert record</h1> 

<?php include "add.php";


  $dns="mysql:host=localhost;dbname=schooldb";
        $username="root";
        $password="mysql";
try {

    $db= new Pdo( $dns, $username, $password);
if (isset($_REQUEST["submit"])) {

    $id_num=$_POST["ID"];
    $U_Name=$_POST["name"];

}
    
} catch (Exception $e) {
           $error_message =$e->getMessage();
           echo "<p><big><b>Error message:</b></big> <strong>Not coooected</strong> $error_message</p>";
    
}

 ?>
    <?php 
        $query="INSERT INTO `student`(`ID`, `NAME`) VALUES ('$id_num','$U_Name');";
        $dns="mysql:host=localhost;dbname=schooldb";
        $username="root";
        $password="mysql";
        try {
             $db= new Pdo( $dns, $username, $password);
             echo "<p>Connected</p>";

             //PREPARE 
             $statement =$db->prepare($query);
             $statement->execute();
             while($student =$statement->fetch()){
            echo "<tr><TD> ID :". $student['ID']."</td>";
            echo "<td> NAME :". $student['NAME']."</TD></TR>";

             }
             if ($statement->closeCursor()) {
                 # code..
                echo "Recorded ";
             }


        }catch (Exception $e) {
           $error_message =$e->getMessage();
           echo "<p><big><b>Error message:</b></big> <strong>Not coooected</strong> $error_message</p>";
                }

                ?>
</TABLE>
</body>
</html>
