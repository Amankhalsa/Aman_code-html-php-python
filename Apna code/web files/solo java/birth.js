// birth year finding function 
function  person(name,age,city){
		this.name=name;
		this.age=age;
		this.city=city;
		this.birth=birth=function(age) {
				var a =new Date();
				
			var c= a.getFullYear();
			return c - this.age;
			
			
		// birth year finding body...
		};
		};
var p1 = new person (prompt('Enter Name'),
					parseInt(prompt('Enter Age Year')),
					prompt('Enter City'))
this.age=p1.birth()
document.write("<h1>Eveytime Enjoy & play, using this function... </h1>")
document.getElementById('demo').innerHTML= '<font size=10%>My name is: =><b><span class=name> '+p1.name+ 
'</span></b><br> Age  year is =><b> '+p1.age+  
'</b><br> City is  =><b> <span class=name>'+p1.city+'</span></b><br><br> ' + 
'<b></font><font color=green size=10%>Your age  is => '+p1.birth()+'<font></b> <br>';