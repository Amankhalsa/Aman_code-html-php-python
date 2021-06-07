
print("Hello")
class Student:
    "to get student information"
    schoolname="Diya school"
    id=12
    name="preet"
    email="Preet@yahoo.com"
    def __init__(self,id,name,email):
        self.id=id
        self.name=name
        self.email=email
        print("value set")
    def displaydata(self):
        print("id :", self.id)
        print("name :",self.name)
        print("Email :",self.email)
        print()
obj=Student("1","nirmal", "Nirmal@gmail.com")
obj.displaydata()
print()
      
obj2=Student(2,"aman","aman@helix.in")  
obj2.displaydata()    
print(Student.__doc__)
print(Student.id)
print(Student.name)
print(Student.email)
print(Student.schoolname)


