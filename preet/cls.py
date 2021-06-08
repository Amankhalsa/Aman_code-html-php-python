class student:
	def __init__(self, name, age, city):
		self.name=name
		self.age=age
		self.city=city
	def print_student(self,greet):
		print("name is :",self.name)
		print("age is :",self.age)
		print("City is :",self.city+ ", "+greet)



x,y,z=input("enter name:\n"),input("enter age :\n"),input("enter city \n")
print("-----------Detail printed -------------")
obj=student(x,y,z)
# obj.greet()
obj.print_student("\n\t\tThanks you")
print("------------------------")
# obj=student("Rohan", "28", "LDH")
# obj.print_student()
# print("------------------------")
# obj=student("Mohan", "27", "ASR")
# obj.print_student()
# print("------------------------")
# obj=student("Preet", "29", "MGG")
# obj.print_student()

	# first_name="Ram"
	# last_name="milan"
	# age="16"
# obj=student()
# print("name is :",obj.first_name,"\n last name: ",obj.last_name,"\n Age is :",obj.age)
