
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>MYSQL PDO </title>
</head>
<body>
    <TABLE BORDER='0' cellpadding='10' cellspacing='5' bgcolor="skyblue" >
<h1>PDO - Dispaly record</h1> 
    <?php 
        $query="SELECT * FROM  student  ORDER BY Sno;";
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
            echo "<tr><TD> Serial no :". $student['Sno']."</td>";    
            echo "<TD> ID :". $student['ID']."</td>";

            echo "<td> NAME :". $student['NAME']."</TD></TR>";

             }
             $statement->closeCursor();


        }catch (Exception $e) {
           $error_message =$e->getMessage();
           echo "<p><big><b>Error message:</b></big> <strong>Not coooected</strong> $error_message</p>";
                }

                ?>
</TABLE>
</body>
</html>
