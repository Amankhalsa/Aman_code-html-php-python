
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>MYSQL PDO </title>
</head>
<body>
<h1>PDO - Check connection</h1> 
    <?php 
        $dns="mysql:host=localhost;dbname=schooldb";
        $username="root";
        $password="mysql";
        try {
             $db= new Pdo( $dns, $username, $password);
             echo "<p>Connected </p>";
        }catch (Exception $e) {
           $error_message =$e->getMessage();
           echo "<p><big><b>Error message:</b></big> <strong>Not coooected</strong> $error_message</p>";
                }

                ?>
</body>
</html>
