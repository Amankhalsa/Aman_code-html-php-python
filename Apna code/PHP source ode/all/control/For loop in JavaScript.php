<html>
    <head>
        <title>
            For loop in JavaScript 
        </title>
        <style>

        </style>
        
    </head>
    <body>
            <h1>Easy Table Calculator</h1>
<table border='1' cellpadding='8' cellspacing='8' align='left' width="auto">
        <script language="JavaScript" type="text/JavaScript">
       
            var j=parseInt(prompt("Enter any number:"));
           // var k=parseInt(prompt("enter  for col "));
 
 

            for(i=1; i<=10; i++)

            {
            document.write("<tr>");
            for(l=1;l<=j;l++){

                document.write("<td>");
                
                document.write( i+  " x " +l+ " = " +i*l);  
        //if (i<=10) 
          //  { document.write("</td><td>");
            // }
                document.write("</td>");
                   
                    }

        document.write("</tr>");
            }
//        document.write("<table>" ); 
        </script>

</table>
    </body>
</html>