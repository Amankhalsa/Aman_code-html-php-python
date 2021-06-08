<!DOCTYPE html> 

<html> 
<head> 
    <title> 
        How to call PHP function 
        on the click of a Button ? 
    </title> 
</head> 
<body style="text-align:center;"> 
    <h1 style="color:green;"> 
        GeeksforGeeks 
    </h1>
    <h4> 
        How to call PHP function 
        on the click of a Button ? 
    </h4>
    <?php 
 function button1(){ 
            echo "This is 1 that is selected"; 
        }  
 function button2(){ 
            echo "This is 2 that is selected"; 
        } 
      if(array_key_exists("button1",$_POST)) {
 		button1();
		} 
 else if(array_key_exists("button2",$_POST)) { 
		button2(); 
		} 
 ?>
    <form method="POST"> 
        <input type="submit" name="button1" class="button" value="Button1" >  
        <input type="submit" name="button2"class="button" value="Button2" > 
    </form> 
</head> 
</html> 

