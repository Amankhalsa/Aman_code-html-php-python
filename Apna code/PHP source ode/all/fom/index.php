

<!DOCTYPE html>
<html>
<head>
    <title>Calc</title>
    <link rel="icon" type="" href="favicon.png">
    <style type="text/css">
        form{
            max-width: 0 auto ;
            background-color: wheat;

        }
        input {border-radius: 10px;}
input:focus{
    background-color: skyblue;
    border: 1px blue solid;
    font-weight: bold;

}
h4{
    margin-left: 30px;
    color: blue;
}

    </style>
</head>
<body>

<form action="#" method="post">
<fieldset>    
 <legend><h3>All in one</h3></legend>
<!--==============================================================================-->
   <h4> Devide:</h4>
    Enter A:<input type="text" name="a"><br><br>
    Enter B:<input type="text" name="b"><br><br>
    Submit:<input type="submit" name="submit1" value="submit"><BR>

<?php 
if (isset($_REQUEST['submit1'])) {
  @  $a=$_REQUEST['a'];
  @  $b=$_REQUEST['b'];

    try {
        if ($b<=0) {
            throw new Exception("Error: Dear please enter grater then 0 <br>");
            
            # code...
        }else {
                $result1=$a/$b;
    echo "Answer is : $result1<br><br>"    ;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

     }

     ;?>
<!--==============================================================================-->
    <h4>Subtract:</h4>
    Enter A:<input type="text" name="c"><br><br>
    Enter B:<input type="text" name="d"><br><br>
    Submit:<input type="submit" name="submit2" value="submit"><br>
<?php  
if (isset($_REQUEST['submit2'])) {
     $c=$_REQUEST['c'];
   $d=$_REQUEST['d'];
    $result2=$c-$d;
    echo "Answer is : $result2<br><br>";
};?>
<!--==============================================================================-->
   <h4> Multiply:</h4>
    Enter A:<input type="text" name="e"><br><br>
    Enter B:<input type="text" name="f"><br><br>
    Submit:<input type="submit" name="submit3" value="submit"><br>
<?php     
if (isset($_REQUEST['submit3'])) {
    $e=$_REQUEST['e'];
    $f=$_REQUEST['f'];
    $result3=$e*$f;
        echo "Answer is : $result3<br><br>"; };?>
<!--==============================================================================-->
   <h4> Addition:</h4>
    Enter A:<input type="text" name="g"><br><br>
    Enter B:<input type="text" name="h"><br><br>
    Submit:<input type="submit" name="submit4" value="submit"><br>
<?php 
if (isset($_REQUEST['submit4'])) {
    $g=$_REQUEST['g'];
    $h=$_REQUEST['h'];
    $result4=$g+$h;
    echo "Answer is : $result4<br><br>"    ;}
 ;?>

  </fieldset>
</form>

</body>
</html>