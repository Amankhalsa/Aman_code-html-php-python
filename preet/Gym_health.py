
import datetime
def gettime():
    return datetime.datetime.now()
def take(k):
	#1st number code 
	if k==1:
		print("-----------------------------------")
		print ("You entered in Aman Health care \n")
		print("-----------------------------------")
		c=int(input("enter 1 for ex 2 for health:"))
		if c==1:
			value=input("type here\n")
			with open("aman-ex.txt","a") as op:
				op.write(str([str(gettime())])+": "+value+"\n")
			print("File wittern successfully ")
		elif c==2:
			print ("\nYou entered in Aman  health care ")
			value=input("type here\n")
			with open("aman-fd.txt","a") as op:
				op.write(str([str(gettime())])+": "+value+"\n")
			print("AMAN EX File wittern successfully ")
		print("\n\t*****Thanks for visit us*****")
		#2nd 
	elif k==2:
		print ("You entered in Preet  Health care \n")
		c=int(input("enter 1 for ex 2 for health:"))
		if c==1:
			print("you entered in excersice part")
			value=input("type here :\n")
			with open("preet-ex.txt","a") as op:
				op.write(str([str(gettime())])+" :"+value+"\n")
			print("\n\tpreet ex file written successfully")

		elif c==2:
			print ("\nYou entered in preet  health care ")
			value=input("type here :\n")
			with open("preet-fd.txt","a") as op:
				op.write(str([str(gettime())])+" :"+value+"\n")
			print("\n\t preet food File wittern successfully ")
		print("\n\t*****Thanks for visit us*****")
		#3rd number code 
	elif k==3:
		print("-----------------------------------")

		print ("You entered in singh care \n")
		print("-----------------------------------")

		c=int(input("enter 1 for ex 2 for health:"))

		if c==1:
			print("you entered in excersice part")
			value=input("type here :\n")
			with open("SINGH-EX.txt","a") as op:
				op.write(str([str(gettime())])+" :"+value+"\n")
			print("\n\t SINGH EX  File wittern successfully ")

			print("***********************************")

		elif c==2:
			print("***********************************")
			print ("\nYou entered in Aman  health care ")
			value=input("TYOE HERE: \n")
			with open("singh-fd.txt","a") as op:
				op.write(str([str(gettime())])+" :"+value+"\n")
			print("***********************************")
		print("\n\t*****Thanks for visit us*****")

print("health management system: ")
a=int(input("press 1 for lock the value and 2 for retrieve "))

if a==True:
    b = int(input("press 1 for Aman 2 for preet 3 for singh "))
    take(b)
else:
	print("\n\t\tComming soon")