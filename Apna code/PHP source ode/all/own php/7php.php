<html> 
    <head>
        <title>
            IF statement in php 
        </title>
        <body>
        <h1> <mark>If else statement in php</mark> </h1>
            <?php

            $today= date('l');
            echo '<h2> Today is: ' .$today. '</h2>';
if($today =='saturday' || $today =='sunday')
{
            echo "waw you are enjoy weekend";
}
else if($today == 'friday')
{
        echo "waw its weekend are comes";
}
else { 
echo  " <h2>It  is a  working day</h2>";
}
?>
        </body>
    </head>
</html>