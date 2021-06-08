
<?php
   class Base {
    function display()
 {
         echo "\nBase class function declared final!\n";
      }
     
   

        function demo() 
        {
         echo "\nBase class function!\n";
      		}
 
  }
   class Derived extends Base {
      

      function demo() 
   
   {
         echo "\nDerived class function!\n";
      		}
  
 }
   $ob = new Base;
   $ob->demo();
   $ob->display();
   $ob2 = new Derived;
   $ob2->demo();
   $ob2->display();
?>