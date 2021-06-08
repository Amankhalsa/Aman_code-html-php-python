defination=confirm('If you want to use this object constructo prees ok ');
			var a='<h1><br>Once you have an object constructor, you can use the new keyword to create new objects of the same type.<br>This allows you to create only a single object.Sometimes, we need to set an "object type" that can be used to create a number of objects of a single type.The standard way to create an "object type" is to use an object constructor function</h1>'
			if(defination==true){
		document.write(a);
	}else{document.write("<h3><mark>Please press ok</mark><h3>");}
//2nd function 
	function  person(name, age, city,birth){
		this.name=name;
		this.age=age;
		this.city=city;
		this.birth=birth
		this.changeName=function(name,age,city,birth){
			this.name=name;
			this.age=age;
			this.city=city
			this.birth=function(){
				var d =new Date();
				var s=d.getfullyear();
				return s - this.age; 
			}
			
		}
	}
	var p1 = new person(prompt('Enter Name:'),parseInt(prompt("Enter Age")),prompt('Enter City'))
	p1.changeName (prompt('Change name:'),parseInt(prompt("Enter Age")),prompt('Enter City'));

	
	document.getElementById('demo').innerHTML= '<center><table border=1 ><caption><h1>Thanks for using this</h1></caption><tr><td>My name is<b></td><td>'
	+p1.name+'</td></tr> </b><br><br><tr><td> Age <b></td><td>' +p1.age+ '</td></tr></b><br><br><tr><td>City</td><td> <b>' +p1.city+'</b></td></tr></table><center>';
